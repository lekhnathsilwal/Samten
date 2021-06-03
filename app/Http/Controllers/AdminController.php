<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\Welcome;
use App\Mail\ForgetPassword;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Icon;
use App\Message;

class AdminController extends Controller
{
    public function showDashboard(){
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('admin.index')->with(['logo'=>$logo,'sum'=>$sum]);
    }
    public function showAdmin(){
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        if(Auth::user()->type==0){
            $admin=User::where('status','1')->get();
        }else{
            $admin=User::where('status','1')->where('type','1')->get();
        }
        return view('admin.show-admin')->with(['admins'=>$admin,'logo'=>$logo,'sum'=>$sum]);
    }
    public function showLoginForm(){
        return view('admin.login');
    }
    public function addAdmin(){
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('admin.register')->with(['logo'=>$logo,'sum'=>$sum]);
    }
    public function storeAdmin(Request $request){
        $this->validate($request, [
            'email' => 'email|required|unique:users,email',
            // 'password' => 'required|confirmed|min:6|max:32',
            'f_name' => 'required|min:2|max:32',
            'l_name' => 'required|min:2|max:32',
            'pp' => 'image'
        ]);
        if ($request->hasFile('pp')) {
            //Get name of file with extension
            $fileNameWithExt = $request->file('pp')->getClientOriginalName();
            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('pp')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('pp')->move(public_path().'/uploads/admin/profile_picture', $fileNameToStore);
        } else {
            $fileNameToStore = 'nopp.jpg';
        }
        $admin = new User;
        $admin->f_name = $request->f_name;
        $admin->l_name = $request->l_name;
        $admin->email = $request->email;
        $password=Str::random(10);
        $admin->password = bcrypt($password);
        $admin->status = 1;
        if(Auth::user()->type==0){
            $admin->type = $request->type;
        }else{
            $admin->type = 1;
        }
        $admin->pp = $fileNameToStore;
        if($admin->save()){
            Mail::to($admin)->send(new Welcome($admin,$password));
            return redirect()->route('show.admin')->with('success', 'Admin registered successfully');
        }
    }
    public function editProfile($id){
        $sum=Contact::sum('new_message');
        $admin=User::find($id);
        $logo=Icon::where('type','logo')->first();
        return view('admin.edit-profile')->with(['admin'=>$admin,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateProfile(Request $request,$id){
            $admin = User::find($id);
            $email_status=0;
            if($admin->email != $request->email){
                $email_status=1;
            }
            $this->validate($request, [
                'email' => 'email|required|unique:users,email,' . $id,
                'f_name' => 'required|min:2|max:32',
                'l_name' => 'required|min:2|max:32',
                'pp' => 'image'
            ]);
            if ($request->hasFile('pp')) {
                if($admin->pp!='nopp.jpg'){
                    //delete old image
                    File::delete("uploads/admin/profile_picture/" . $admin->pp);
                }
                //Get name of file with extension
                $fileNameWithExt = $request->file('pp')->getClientOriginalName();
                //Get just file name
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $request->file('pp')->getClientOriginalExtension();
                //Filename to store
                $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
                //Upload image
                $path = $request->file('pp')->move(public_path().'/uploads/admin/profile_picture', $fileNameToStore);
                $admin->pp = $fileNameToStore;
            }
            $admin->f_name = $request->f_name;
            $admin->l_name = $request->l_name;
            $admin->email = $request->email;
            if(Auth::user()->type==0){
                $admin->type = $request->type;
            }
            if($email_status==1){
                $password=Str::random(10);
                $admin->password = bcrypt($password);
            }
            if($admin->save()){
                if($email_status==1){
                    if(Auth::user()->id==$admin->id){
                        Mail::to($admin)->send(new Welcome($admin,$password));
                        Auth::logout();
                        return redirect()->route('login')->with('success','Your email is changed check your mail for new password');
                    }else{
                        Mail::to($admin)->send(new Welcome($admin,$password));
                        return redirect()->route('show.admin')->with('success','email of admin '.$admin->f_name.' '.$admin->l_name.' is changed and new password is sent to that address');
                    }
                }else{
                    return redirect()->route('show.admin')->with('success','Profile of admin '.$admin->f_name.' '.$admin->l_name.' is updated successfully');
                }
            }
    }
    public function deleteAdmin($id){
        $admin=User::find($id);
        if($admin->pp!='nopp.jpg'){
            //delete old image
            File::delete("uploads/admin/profile_picture/" . $admin->pp);
        }
        $name=$admin->f_name.' '.$admin->l_name;
        $admin->delete();
        return redirect()->route('show.admin')->with('success','Admin '.$name.' deleted successfully');
    }
    public function checkLogin(Request $request){
        if($request->remember){
            $remember=true;
        }else{
            $remember=false;
        }
        $this->validate($request,[
            'email'=>'email|required',
            'password'=>'required|min:6|max:32'
        ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], $remember)){
            if(Auth::user()->status==1){
                return redirect()->intended(route('dashboard'));
            }else{
                Auth::logout();
                return redirect()->back()->with('error','Sorry your account has been deleted');
            }
        }
        else{
            return redirect()->back()->with('error','Email or password doesnot match');
        }
    }
    public function forgetPassword(){
        return view('admin.forget-password');
    }
    public function passwordResetMail(Request $request){
        $admin=User::where('email',$request->input('email'))->first();
        if($admin){
            Mail::to($admin)->send(new ForgetPassword($admin));
            return redirect()->back()->with('success','The password reset link is sent to the email');
        }
        else{
            return redirect()->back()->withErrors('The Email is not associated with us.');
        }
    }
    public function resetForgetPassword($id){
        return view('admin.reset-forget-password')->with('id',$id);
    }
    public function resetPassword(Request $request, $id){
        $admin=User::find($id);
        if($admin->email==$request->email){
            $this->validate($request,[
                'password' => 'required|confirmed|min:6|max:32'
            ]);
            $admin->password=bcrypt($request->input('password'));
            $admin->save();
            return redirect()->route('login')->with('success', 'The password Reset Successfully please proceed login');
        }else{
            return redirect()->back()->withErrors('Email does not match please enter correct email');
        }
    }
    public function changePassword(){
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('admin.change-password')->with(['logo'=>$logo,'sum'=>$sum]);
    }
    public function updatePassword(Request $request){
        $this->validate($request,[
            'old_password' => 'required|min:6|max:32',
            'password' => 'required|confirmed|min:6|max:32'
        ]);
        $admin=Auth::user();
        if(Hash::check($request->input('old_password'), $admin->password)){
            $admin->password=bcrypt($request->input('password'));
            $admin->save();
        }
        else{
            return back()->with('error','Old password does not match');
        }
        Auth::logout();
        return redirect()->route('login')->with('success','Password updated successfully!!! please proceed to login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function showMessage()
    {
        $sum=Contact::sum('new_message');
        Contact::where('new_message','1')->update(['new_message'=>'0']);
        $logo=Icon::where('type','logo')->first();
        $messages=Contact::orderBy('created_at', 'desc')->paginate(7);
        return view('admin.show-message')->with(['messages'=>$messages,'logo'=>$logo,'sum'=>$sum]);
    }
    public function deleteContact($id)
    {
        $message=Contact::find($id);
        $message->delete();
        return redirect()->route('show.message')->with('success','Message Deleted Successfully');
    }
}
