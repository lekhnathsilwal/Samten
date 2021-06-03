<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\WeHave;
use Illuminate\Support\Facades\File;
use App\Icon;

class WeHaveController extends Controller
{
    public function addWeHave()
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('site_updates.add-weHave')->with(['logo'=>$logo,'sum'=>$sum]);
    }
    public function storeWeHave(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:2|max:64',
            'description' => 'required|min:2',
            'image' => 'required|image'
        ]);
        $fileNameWithExt = $request->file('image')->getClientOriginalName();
        //Get just file name
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('image')->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        //Upload image
        $path = $request->file('image')->move(public_path() . '/uploads/we_have', $fileNameToStore);
        $weHave = new Wehave;
        $weHave->title = $request->title;
        $weHave->description = $request->description;
        $weHave->image = $fileNameToStore;
        $weHave->save();
        return redirect()->route('show.home')->with('success', 'Item Added Successfully');
    }
    public function editWeHave($id)
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $weHave = WeHave::find($id);
        return view('site_updates.edit-weHave')->with(['weHave'=>$weHave,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateWeHave(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:2|max:64',
            'description' => 'required|min:2',
            'image' => 'image'
        ]);
        $weHave = WeHave::find($id);
        if ($request->hasFile('image')) {
            File::delete("uploads/we_have/" . $weHave->image);
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('image')->move(public_path() . '/uploads/we_have', $fileNameToStore);
            $weHave->image = $fileNameToStore;
        }
        $weHave->title = $request->title;
        $weHave->description = $request->description;
        $weHave->save();
        return redirect()->route('show.home')->with('success', 'Item Updated Successfully');
    }
    public function deleteWeHave($id)
    {
        $weHave = WeHave::find($id);
        File::delete("uploads/we_have/" . $weHave->image);
        $weHave->delete();
        return redirect()->route('show.home')->with('success', 'Item Deleted Successfully');
    }
}
