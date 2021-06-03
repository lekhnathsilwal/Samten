<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Bod;
use App\Contact;
use App\Icon;

class BodController extends Controller
{
    public function addBod()
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('bods.add-bod')->with(['logo'=>$logo,'sum'=>$sum]);
    }
    public function storeBod(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|max:64',
            'position' => 'required|min:2|max:64',
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
        $path = $request->file('image')->move(public_path() . '/uploads/bods', $fileNameToStore);
        $bod = new Bod;
        $bod->name = $request->name;
        $bod->position = $request->position;
        $bod->image = $fileNameToStore;
        $bod->save();
        return redirect()->route('show.bod')->with('success', 'New Board of Director Added Successfully');
    }
    public function editBod($id)
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $bod = Bod::find($id);
        return view('bods.edit-bod')->with(['bod'=>$bod,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateBod(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:2|max:64',
            'position' => 'required|min:2|max:64',
            'image' => 'image'
        ]);
        $bod = Bod::find($id);
        if ($request->hasFile('image')) {
            File::delete("uploads/bods/" . $bod->image);
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('image')->move(public_path() . '/uploads/bods', $fileNameToStore);
            $bod->image = $fileNameToStore;
        }
        $bod->name = $request->name;
        $bod->position = $request->position;
        $bod->save();
        return redirect()->route('show.bod')->with('success', 'Board of Director Updated Successfully');
    }
    public function deleteBod($id)
    {
        $bod = Bod::find($id);
        File::delete("uploads/bods/" . $bod->image);
        $bod->delete();
        return redirect()->route('show.bod')->with('success', 'Board of Director Deleted Successfully');
    }
}
