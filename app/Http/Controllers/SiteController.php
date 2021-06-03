<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Icon;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Slider;
use App\Message;
use App\Total;

class SiteController extends Controller
{
    public function addSlide()
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $change = 0;
        return view('site_updates.change-slide')->with(['change'=>$change,'logo'=>$logo,'sum'=>$sum]);
    }
    public function storeSlide(Request $request)
    {
        $this->validate($request, [
            'slide' => 'required|image'
        ]);
        $fileNameWithExt = $request->file('slide')->getClientOriginalName();
        //Get just file name
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('slide')->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        //Upload image
        $path = $request->file('slide')->move(public_path() . '/uploads/sliders', $fileNameToStore);
        $slider = new Slider;
        $slider->image = $fileNameToStore;
        $slider->save();
        return redirect()->route('show.home')->with('success', 'New Slide Added Successfully');
    }
    public function changeSlide($id)
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $change = 1;
        return view('site_updates.change-slide')->with(['change' => $change, 'id' => $id,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateSlide(Request $request, $id)
    {
        $this->validate($request, [
            'slide' => 'required|image'
        ]);
        $slider = Slider::find($id);
        File::delete("uploads/sliders/" . $slider->image);
        $fileNameWithExt = $request->file('slide')->getClientOriginalName();
        //Get just file name
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('slide')->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        //Upload image
        $path = $request->file('slide')->move(public_path() . '/uploads/sliders', $fileNameToStore);
        $slider->image = $fileNameToStore;
        $slider->save();
        return redirect()->route('show.home')->with('success', 'Slide Updated Successfully');
    }
    public function deleteSlide($id)
    {
        $slide = Slider::find($id);
        File::delete("uploads/sliders/" . $slide->image);
        $slide->delete();
        return redirect()->route('show.home')->with('success', 'Slide Deleted Successfully');
    }
    public function addMessage($type){
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('site_updates.add-message')->with(['type'=>$type,'logo'=>$logo,'sum'=>$sum]);
    }
    public function storeMessage(Request $request, $type)
    {
        $this->validate($request, [
            'title' => 'required|min:2|max:255',
            'subtitle' => 'min:2|max:255',
            'description' => 'required|min:2',
            'image' => 'image'
        ]);
        $message = new Message;
        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('image')->move(public_path() . '/uploads/message_image', $fileNameToStore);
            $message->image = $fileNameToStore;
        }
        $message->title = $request->title;
        if ($request->has('subtitle')) {
            $message->subtitle = $request->subtitle;
        }
        $message->type=$type;
        $message->description = $request->description;
        $message->save();
        return redirect()->route(($message->type=='bod')?'show.bod':'show.about_us')->with('success', 'Updated Successfully');
    }
    public function editMessage($id)
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $message = Message::find($id);
        return view('site_updates.edit-message')->with(['message'=>$message,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateMessage(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:2|max:255',
            'subtitle' => 'min:2|max:255',
            'description' => 'required|min:2',
            'image' => 'image'
        ]);
        $message = Message::find($id);
        if ($request->hasFile('image')) {
            File::delete("uploads/message_image/" . $message->image);
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('image')->move(public_path() . '/uploads/message_image', $fileNameToStore);
            $message->image = $fileNameToStore;
        }
        $message->title = $request->title;
        if ($request->has('subtitle')) {
            $message->subtitle = $request->subtitle;
        }
        $message->description = $request->description;
        $message->save();
        if($message->type=='features'){
            return redirect()->route('show.home')->with('success','Updated Successfully');
        }
        return redirect()->route(($message->type=='bod')?'show.bod':'show.about_us')->with('success', 'Updated Successfully');
    }
    public function deleteMessage($id){
        $message=Message::find($id);
        $type=$message->type;
        if($message->image!=null){
            File::delete("uploads/message_image/" . $message->image);
        }
        $message->delete();
        return redirect()->route(($type=='bod')?'show.bod':'show.about_us')->with('success', 'Deleted Successfully');
    }
    public function editTotal($id){
        $sum=Contact::sum('new_message');
        $total=Total::find($id);
        $logo=Icon::where('type','logo')->first();
        return view('site_updates.edit-total')->with(['total'=>$total,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateTotal(Request $request,$id){
        $this->validate($request, [
            'type' => 'required|min:1|max:64',
            'title' => 'required|min:1|max:64',
            'total' => 'required|min:1'
        ]);
        $total=Total::find($id);
        $total->type=$request->type;
        $total->title=$request->title;
        $total->total=$request->total;
        $total->save();
        return redirect()->route('show.home')->with('success','Updated Successfully');
    }
    public function editInfo(){
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $info=Info::first();
        return view('site_updates.edit-info')->with(['info'=>$info,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateInfo(Request $request){
        $this->validate($request, [
            'name' => 'required|min:1|max:128',
            'address' => 'required|min:1|max:128',
            'contact' => 'required',
            'email' => 'required|email'
        ]);
        $info=Info::first();
        $info->name=$request->name;
        $info->address=$request->address;
        $info->contact=$request->contact;
        $info->email=$request->email;
        $info->save();
        return redirect()->route('show.home')->with('success','Contact information updated successfully');
    }
    public function editIcon($id){
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $icon=Icon::find($id);
        return view('site_updates.edit-icon')->with(['icon'=>$icon,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateIcon(Request $request,$id){
        $icon=Icon::find($id);
        if($icon->type=='icon'){
            $this->validate($request, [
                'image' => 'required|min:1|max:16',
                'title' => 'required|min:1|max:128',
            ]);
            $icon->image=$request->image;
            $icon->title=$request->title;
        }else{
            $this->validate($request, [
                'image' => 'required|image',
            ]);
            File::delete("uploads/images/" . $icon->image);
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('image')->move(public_path() . '/uploads/images', $fileNameToStore);
            $icon->image = $fileNameToStore;
        }
        $icon->save();
        return redirect()->route('show.home')->with('success','Updated Successufully');
    }
}
