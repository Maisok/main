<?php

namespace App\Http\Controllers;
use App\Models\Videos;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
   
    public function index(){
        return Videos::with('channel')->get();
    }

    public function show($id){ 
        $arr=DB::table('videos')->select('id', 'title','description', 'videoSRC')->where('id', $id)->get();                
        return view('videos', [
            'arr' => $arr
        ]);
    }
}
 