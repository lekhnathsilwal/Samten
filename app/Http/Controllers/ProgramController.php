<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Program;
use App\Icon;

class ProgramController extends Controller
{
    public function addProgram()
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('site_updates.add-program')->with(['logo'=>$logo,'sum'=>$sum]);
    }
    public function storeProgram(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:2'
        ]);
        $program = new Program;
        $program->title = $request->title;
        $program->save();
        return redirect()->route('show.programs')->with('success', 'Program Type Added Successfully');
    }
    public function editProgram($id)
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $program = Program::find($id);
        return view('site_updates.edit-program')->with(['program'=>$program,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateProgram(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:2'
        ]);
        $program = Program::find($id);
        $program->title = $request->title;
        $program->save();
        return redirect()->route('show.programs')->with('success', 'Program Type Updated Successfully');
    }
    public function deleteProgram($id)
    {
        $program = Program::find($id);
        $program->delete();
        return redirect()->route('show.programs')->with('success', 'Program Type Deleted Successfully');
    }
}
