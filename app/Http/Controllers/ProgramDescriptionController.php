<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\ProgramDescription;
use App\Program;
use App\Icon;

class ProgramDescriptionController extends Controller
{
    public function addProgramDesc($id)
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        return view('site_updates.add-programDesc')->with(['id'=>$id,'logo'=>$logo,'sum'=>$sum]);
    }
    public function storeProgramDesc(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required|min:2'
        ]);
        $program = Program::find($id);
        $programDesc = new ProgramDescription;
        $programDesc->description = $request->description;
        $programDesc->program()->associate($program);
        $programDesc->save();
        return redirect()->route('show.programs')->with('success', 'Program Added Successfully');
    }
    public function editProgramDesc($id)
    {
        $sum=Contact::sum('new_message');
        $logo=Icon::where('type','logo')->first();
        $programDesc = ProgramDescription::find($id);
        return view('site_updates.edit-programDesc')->with(['programDesc'=>$programDesc,'logo'=>$logo,'sum'=>$sum]);
    }
    public function updateProgramDesc(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required|min:2'
        ]);
        $programDesc = ProgramDescription::find($id);
        $programDesc->description = $request->description;
        $programDesc->save();
        return redirect()->route('show.programs')->with('success', 'Program Updated Successfully');
    }
    public function deleteProgramDesc($id)
    {
        $programDesc = ProgramDescription::find($id);
        $programDesc->delete();
        return redirect()->route('show.programs')->with('success', 'Program Deleted Successfully');
    }
}
