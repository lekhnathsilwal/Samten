<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\WeHave;
use App\Video;
use App\Message;
use App\Program;
use App\Gallery;
use App\Calender;
use App\Achievement;
use App\Bod;
use App\Contact;
use App\Icon;
use App\Info;
use App\Total;

class PagesController extends Controller
{
    public function showHome(){
        $slides=Slider::all();
        $weHaves=WeHave::all();
        $videos=Video::all();
        $programs=Program::take(2)->get();
        $message=Message::where('type','welcome')->first();
        $totals=Total::all();
        $info=Info::first();
        $icons=Icon::where('type','icon')->get();
        $logo=Icon::where('type','logo')->first();
        $features=Message::where('type','features')->get();
        return view('index')->with(['slides'=>$slides,'weHaves'=>$weHaves,'videos'=>$videos,'message'=>$message,'programs'=>$programs,'totals'=>$totals,'info'=>$info,'features'=>$features,'icons'=>$icons,'logo'=>$logo]);
    }
    public function showAboutUs(){
        $info=Info::first();
        $icons=Icon::where('type','icon')->get();
        $logo=Icon::where('type','logo')->first();
        $principal_message=Message::where('type','principal')->get();
        $mission_message=Message::where('type','mission')->get();
        $welcome_message=Message::where('type','welcome')->first();
        return view('about_us')->with(['info'=>$info,'welcome_message'=>$welcome_message,'principal_message'=>$principal_message,'mission_message'=>$mission_message,'icons'=>$icons,'logo'=>$logo]);
    }
    public function showBod(){
        $bods=Bod::all();
        $logo=Icon::where('type','logo')->first();
        $info=Info::first();
        $messages=Message::where('type','bod')->get();
        return view('bod')->with(['bods'=>$bods,'info'=>$info,'messages'=>$messages,'logo'=>$logo]);
    }
    public function showPrograms(){
        $programs=Program::all();
        $logo=Icon::where('type','logo')->first();
        $info=Info::first();
        return view('programs')->with(['programs'=>$programs,'info'=>$info,'logo'=>$logo]);
    }
    public function showAchievements(){
        $achievements=Achievement::all();
        $logo=Icon::where('type','logo')->first();
        $info=Info::first();
        return view('achievements')->with(['achievements'=>$achievements,'info'=>$info,'logo'=>$logo]);
    }
    public function showGallery(){
        $galleries=Gallery::all();
        $logo=Icon::where('type','logo')->first();
        $info=Info::first();
        return view('gallery')->with(['galleries'=>$galleries,'info'=>$info,'logo'=>$logo]);
    }
    public function showCalender(){
        $calenders=Calender::all();
        $logo=Icon::where('type','logo')->first();
        $info=Info::first();
        return view('calender')->with(['calenders'=>$calenders,'info'=>$info,'logo'=>$logo]);
    }
    public function showContact(){
        $info=Info::first();
        $logo=Icon::where('type','logo')->first();
        return view('contact')->with(['info'=>$info,'logo'=>$logo]);
    }
    public function storeContact(Request $request){
        $this->validate($request, [
            'name' => 'required|min:2|max:128',
            'email' => 'required|email|min:2|max:128',
            'subject' => 'required|min:2',
            'message' => 'required|min:2',
        ]);
        $contact=new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->new_message=1;
        $contact->save();
        return redirect()->route('show.contact')->with('success','Message sent successfully');
    }
}
