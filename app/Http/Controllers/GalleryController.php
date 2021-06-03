<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\File;
use App\Icon;

class GalleryController extends Controller
{
    public function addGallery()
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('site_updates.add-gallery')->with(['logo'=>$logo,'sum'=>$sum]);
    }
    public function storeGallery(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|min:2',
            'image' => 'required|image'
        ]);
        $gallery = new Gallery;
        $fileNameWithExt = $request->file('image')->getClientOriginalName();
        //Get just file name
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('image')->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        //Upload image
        $path = $request->file('image')->move(public_path() . '/uploads/gallery', $fileNameToStore);
        $gallery->image = $fileNameToStore;
        $gallery->description = $request->description;
        $gallery->save();
        return redirect()->route('show.gallery')->with('success', 'New Item Added Successfully');
    }
    public function editGallery($id)
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $gallery = Gallery::find($id);
        return view('site_updates.edit-gallery')->with(['gallery'=>$gallery,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateGallery(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required|min:2'
        ]);
        $gallery = Gallery::find($id);
        if($request->hasFile('image')){
            $this->validate($request, [
                'image' => 'image'
            ]);
            File::delete("uploads/gallery/" . $gallery->image);
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('image')->move(public_path() . '/uploads/gallery', $fileNameToStore);
            $gallery->image = $fileNameToStore;
        }
        $gallery->description = $request->description;
        $gallery->save();
        return redirect()->route('show.gallery')->with('success', 'Gallery Updated Successfully');
    }
    public function deleteGallery($id)
    {
        $gallery = Gallery::find($id);
        File::delete("uploads/gallery/" . $gallery->image);
        $gallery->delete();
        return redirect()->route('show.gallery')->with('success', 'Item Deleted Successfully');
    }
}
