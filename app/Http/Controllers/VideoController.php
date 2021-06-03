<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Video;
use App\Icon;

class VideoController extends Controller
{
    public function addVideo()
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $change = 0;
        return view('site_updates.change-video')->with(['change'=>$change,'logo'=>$logo,'sum'=>$sum]);
    }
    public function storeVideo(Request $request)
    {
        $video = new Video;
        if ($request->hasFile('video')) {
            $this->validate($request, [
                'video' => 'mimes:mp4,ogx,oga,ogv,ogg,webm',
            ]);
            $fileNameWithExt = $request->file('video')->getClientOriginalName();
            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('video')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('video')->move(public_path() . '/uploads/videos', $fileNameToStore);
            $video->name = $fileNameToStore;
            $video->type = "file";
        } else {
            $this->validate($request, [
                'link' => 'required|min:2'
            ]);
            $video->name = substr($request->link, 17);
            $video->type = "link";
        }
        $video->save();
        return redirect()->route('show.home')->with('success', 'Video Added Successfully');
    }
    public function changeVideo($id)
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $change = 1;
        return view('site_updates.change-video')->with(['change' => $change, 'id' => $id,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateVideo(Request $request, $id)
    {
        $video = Video::find($id);
        if ($request->hasFile('video')) {
            $this->validate($request, [
                'video' => 'mimes:mp4,ogx,oga,ogv,ogg,webm',
            ]);
            if ($video->type == 'file') {
                File::delete("uploads/videos/" . $video->name);
            }
            $fileNameWithExt = $request->file('video')->getClientOriginalName();
            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('video')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('video')->move(public_path() . '/uploads/videos', $fileNameToStore);
            $video->name = $fileNameToStore;
            $video->type = "file";
        } else {
            $this->validate($request, [
                'link' => 'required|min:2'
            ]);
            if ($video->type == 'file') {
                File::delete("uploads/videos/" . $video->name);
            }
            $video->name = substr($request->link, 17);
            $video->type = "link";
        }
        $video->save();
        return redirect()->route('show.home')->with('success', 'Video Updated Successfully');
    }
    public function deleteVideo($id)
    {
        $video = Video::find($id);
        if ($video->type == 'file') {
            File::delete("uploads/videos/" . $video->name);
        }
        $video->delete();
        return redirect()->route('show.home')->with('success', 'Video Deleted Successfully');
    }
}
