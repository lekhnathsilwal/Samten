<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calender;
use App\Contact;
use App\Icon;

class CalenderController extends Controller
{
    public function addCalender(){
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('site_updates.add-calender')->with(['logo'=>$logo,'sum'=>$sum]);
    }
    public function storeCalender(Request $request){
        $this->validate($request, [
            'title' => 'required|min:2'
        ]);
        $calender = new Calender;
        $calender->title = $request->title;
        $calender->save();
        return redirect()->route('show.calender')->with('success', 'Added Successfully');
    }
    public function editCalender($id){
        $sum=Contact::sum('new_message');
        $calender=Calender::find($id);
        $logo=Icon::where('type','logo')->first();
        return view('site_updates.edit-calender')->with(['calender'=>$calender,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateCalender(Request $request,$id){
        $this->validate($request, [
            'title' => 'required|min:2'
        ]);
        $calender = Calender::find($id);
        $calender->title = $request->title;
        $calender->save();
        return redirect()->route('show.calender')->with('success', 'Updated Successfully');
    }
    public function deleteCalender($id){
        $calender=Calender::find($id);
        $calender->delete();
        return redirect()->route('show.calender')->with('success', 'Deleted Successfully');
    }
}
