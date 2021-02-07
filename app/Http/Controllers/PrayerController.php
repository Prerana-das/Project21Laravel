<?php

namespace App\Http\Controllers;
use App\Prayer;
use App\Hadith;
use App\MuslimName;
use App\Dua;
use App\Contact;
use App\Video;
use Illuminate\Http\Request;

class PrayerController extends Controller
{
    //

    public function admin_prayer(){ 
        // \Log::info($id);
        $video = Prayer::orderBy('id', 'desc')->get();
        return view('admin_prayer')->with(['video'=>$video]);  
    }

    public function save(Request $request){
        // \Log::info($request);
        $data = $request->all();
        if(!$request->title){
            return redirect()->back()->with('alert_message',"Title cann't be null");
        }
        if(!$request->time){
            return redirect()->back()->with('alert_message',"Time cann't be null");
        }
        Prayer::create([
            'title'=>$request->title,
            'time'=>$request->time,
        ]);
        return redirect()->back();
    }

    public function edit(Request $request){
        // \Log::info($request);
        $data = $request->all();
        if(!$request->title){
            return redirect()->back()->with('alert_message',"Title cann't be null");
        }
        if(!$request->time){
            return redirect()->back()->with('alert_message',"Time cann't be null");
        }
        Prayer::where('id',$request->id)->update([
            'title'=>$request->title,
            'time'=>$request->time,
        ]);
        return redirect()->back();
    }

    public function admin_video(){ 
        // \Log::info($id);
        $video = Prayer::orderBy('id', 'desc')->get();
        return view('admin_prayer')->with(['video'=>$video]);  
    }

    public function del(Request $request){ 
        $video = Prayer::where('id',$request->id)->delete();
        return redirect()->back();
    }


    //======================== Hadith ========================
    public function admin_hadith(){ 
        $video = Hadith::orderBy('id', 'desc')->get();
        return view('admin_hadith')->with(['video'=>$video]);  
    }
    public function saveHadith(Request $request){
        $data = $request->all();
        if(!$request->title){
            return redirect()->back()->with('alert_message',"Title cann't be null");
        }
        if(!$request->description){
            return redirect()->back()->with('alert_message',"Description cann't be null");
        }
        if(!$request->reference){
            return redirect()->back()->with('alert_message',"Reference cann't be null");
        }
        Hadith::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'reference'=>$request->reference
        ]);
        return redirect()->back();
    }

    public function editHadith(Request $request){
        $data = $request->all();
        if(!$request->title){
            return redirect()->back()->with('alert_message',"Title cann't be null");
        }
        if(!$request->description){
            return redirect()->back()->with('alert_message',"Description cann't be null");
        }
        if(!$request->reference){
            return redirect()->back()->with('alert_message',"Reference cann't be null");
        }
        Hadith::where('id',$request->id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'reference'=>$request->reference
        ]);
        return redirect()->back();
    }
    public function delHadith(Request $request){ 
        $video = Hadith::where('id',$request->id)->delete();
        return redirect()->back();
    }

     //======================== Muslim Name ========================
     public function admin_muslim_name(){ 
        $video = MuslimName::orderBy('id', 'desc')->get();
        return view('admin_muslim_name')->with(['video'=>$video]);  
    }
    public function saveMuslimName(Request $request){
        $data = $request->all();
        if(!$request->name){
            return redirect()->back()->with('alert_message',"Name cann't be null");
        }
        if(!$request->meaning){
            return redirect()->back()->with('alert_message',"Meaning cann't be null");
        }
        if(!$request->gender){
            return redirect()->back()->with('alert_message',"Gender cann't be null");
        }
        MuslimName::create([
            'name'=>$request->name,
            'meaning'=>$request->meaning,
            'gender'=>$request->gender
        ]);
        return redirect()->back();
    }

    public function editMuslimName(Request $request){
        $data = $request->all();
        if(!$request->name){
            return redirect()->back()->with('alert_message',"Name cann't be null");
        }
        if(!$request->meaning){
            return redirect()->back()->with('alert_message',"Meaning cann't be null");
        }
        if(!$request->gender){
            return redirect()->back()->with('alert_message',"Gender cann't be null");
        }
        MuslimName::where('id',$request->id)->update([
            'name'=>$request->name,
            'meaning'=>$request->meaning,
            'gender'=>$request->gender
        ]);
        return redirect()->back();
    }
    public function delMuslimName(Request $request){ 
        $video = MuslimName::where('id',$request->id)->delete();
        return redirect()->back();
    }


     //======================== Dua ========================
     public function admin_dua(){ 
        $video = Dua::orderBy('id', 'desc')->get();
        return view('admin_dua')->with(['video'=>$video]);  
    }
    public function saveDua(Request $request){
        $data = $request->all();
        if(!$request->title){
            return redirect()->back()->with('alert_message',"Title cann't be null");
        }
        if(!$request->description){
            return redirect()->back()->with('alert_message',"Description cann't be null");
        }
        if(!$request->reference){
            return redirect()->back()->with('alert_message',"Reference cann't be null");
        }
        Dua::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'reference'=>$request->reference
        ]);
        return redirect()->back();
    }

    public function editDua(Request $request){
        $data = $request->all();
        if(!$request->title){
            return redirect()->back()->with('alert_message',"Title cann't be null");
        }
        if(!$request->description){
            return redirect()->back()->with('alert_message',"Description cann't be null");
        }
        if(!$request->reference){
            return redirect()->back()->with('alert_message',"Reference cann't be null");
        }
        Dua::where('id',$request->id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'reference'=>$request->reference
        ]);
        return redirect()->back();
    }
    public function delDua(Request $request){ 
        $video = Dua::where('id',$request->id)->delete();
        return redirect()->back();
    }


     //======================== Contact ========================
     public function admin_contact(){ 
        $video = Contact::orderBy('id', 'desc')->get();
        return view('admin_contact')->with(['video'=>$video]);  
    }
    public function delContact(Request $request){ 
        $video = Contact::where('id',$request->id)->delete();
        return redirect()->back();
    }
    public function addContactMessage(Request $request){
        $data = $request->all();
        if(!$request->name){
            return redirect()->back()->with('alert_message',"Name cann't be null");
        }
        if(!$request->email){
            return redirect()->back()->with('alert_message',"Email cann't be null");
        }
        if(!$request->phone){
            return redirect()->back()->with('alert_message',"Phone number cann't be null");
        }
        if(!$request->subject){
            return redirect()->back()->with('alert_message',"Subject cann't be null");
        }
        if(!$request->description){
            return redirect()->back()->with('alert_message',"Description cann't be null");
        }
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'description'=>$request->description,
        ]);
        return redirect()->back()->with('message',"Your message is succesfully sent");
    }



  //======================== User Panel ========================
    public function prayer_times (){ 
        $video = Prayer::orderBy('id', 'desc')->get();
        return view('prayer_times ')->with(['video'=>$video]);  
    }
    public function hadith (){ 
        $video = Hadith::orderBy('id', 'desc')->get();
        return view('hadith ')->with(['video'=>$video]);  
    }
    public function muslim_names (){ 
        $video = MuslimName::orderBy('id', 'desc')->get();
        return view('muslim_names ')->with(['video'=>$video]);  
    }
    public function duas (){ 
        $video = Dua::orderBy('id', 'desc')->get();
        return view('duas ')->with(['video'=>$video]);  
    }


    public function admin_home(){ 
        $dua = Dua::count();
        $muslimName = MuslimName::count();
        $hadith = hadith::count();
        $video = Video::count();
        return view('admin_home')->with(['dua'=>$dua])->with(['muslimName'=>$muslimName])->with(['hadith'=>$hadith])->with(['video'=>$video]);  
    }

    
}
