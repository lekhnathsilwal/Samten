<?php

namespace App\Http\Controllers;

use App\Calender;
use App\Contact;
use App\Holiday;
use Illuminate\Http\Request;
use App\Icon;

class HolidayController extends Controller
{
    public function addHoliday($id){
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('site_updates.add-holiday')->with(['id'=>$id,'logo'=>$logo,'sum'=>$sum]);
    }
    public function storeHoliday(Request $request,$id){
        $this->validate($request, [
            'description' => 'required|min:2'
        ]);
        $calender=Calender::find($id);
        $holiday = new Holiday;
        $holiday->description = $request->description;
        $holiday->calender()->associate($calender);
        $holiday->save();
        return redirect()->route('show.calender')->with('success', 'Added Successfully');
    }
    public function editHoliday($id){
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $holiday=Holiday::find($id);
        return view('site_updates.edit-holiday')->with(['holiday'=>$holiday,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateHoliday(Request $request,$id){
        $this->validate($request, [
            'description' => 'required|min:2'
        ]);
        $holiday = Holiday::find($id);
        $holiday->description = $request->description;
        $holiday->save();
        return redirect()->route('show.calender')->with('success', 'Updated Successfully');
    }
    public function deleteHoliday($id){
        $holiday=Holiday::find($id);
        $holiday->delete();
        return redirect()->route('show.calender')->with('success', 'Deleted Successfully');
    }
}
