<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Achievement;
use App\Contact;
use App\Icon;

class AchievementController extends Controller
{
    public function addAchievement()
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('achievements.add-achievement')->with(['logo'=>$logo,'sum'=>$sum]);
    }
    public function storeAchievement(Request $request)
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
        $path = $request->file('image')->move(public_path() . '/uploads/achievements', $fileNameToStore);
        $achievement = new Achievement;
        $achievement->title = $request->title;
        $achievement->description = $request->description;
        $achievement->image = $fileNameToStore;
        $achievement->save();
        return redirect()->route('show.achievements')->with('success', 'New Achievement Added Successfully');
    }
    public function editAchievement($id)
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $achievement = Achievement::find($id);
        return view('achievements.edit-achievement')->with(['achievement'=> $achievement,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateAchievement(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:2|max:64',
            'description' => 'required|min:2',
            'image' => 'image'
        ]);
        $achievement = Achievement::find($id);
        if ($request->hasFile('image')) {
            File::delete("uploads/achievements/" . $achievement->image);
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('image')->move(public_path() . '/uploads/achievements', $fileNameToStore);
            $achievement->image = $fileNameToStore;
        }
        $achievement->title = $request->title;
        $achievement->description = $request->description;
        $achievement->save();
        return redirect()->route('show.achievements')->with('success', 'Achievement Updated Successfully');
    }
    public function deleteAchievement($id)
    {
        $achievement = Achievement::find($id);
        File::delete("uploads/achievement/" . $achievement->image);
        $achievement->delete();
        return redirect()->route('show.achievements')->with('success', 'Achievement Deleted Successfully');
    }
}
