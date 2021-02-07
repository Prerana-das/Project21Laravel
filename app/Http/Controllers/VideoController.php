<?php

namespace App\Http\Controllers;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //

    public function scholars_video (){ 
        // \Log::info($id);
        $video = Video::orderBy('id', 'desc')->get();
        return view('scholars_video ')->with(['video'=>$video]);  
    }

    public function save (Request $request){
        // \Log::info($request);
        $data = $request->all();
        if(!$request->link){
            return redirect()->back()->with('alert_message',"Link cann't be null");
        }
        Video::create([
            'link'=>$request->link
        ]);
        return redirect()->back();
    }

    public function edit(Request $request){
        $data = $request->all();
        if(!$request->link){
            return redirect()->back()->with('alert_message',"Link cann't be null");
        }
        Video::where('id',$request->id)->update([
            'link'=>$request->link
        ]);
        return redirect()->back();
    }

    public function admin_video (){ 
        // \Log::info($id);
        $video = Video::orderBy('id', 'desc')->get();
        return view('admin_video ')->with(['video'=>$video]);  
    }

    public function del(Request $request){ 
        $video = Video::where('id',$request->id)->delete();
        return redirect()->back();
    }
}
