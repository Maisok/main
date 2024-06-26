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
        $arr=DB::table('videos')->select('*')->where('id', $id)->get();     
        foreach ($arr as $video){
            $user_id=$video->user_id;
        }
        $user=DB::table('users')->select('name')->where('id', $user_id)->get();
        foreach ($user as $user_name){
            $name=$user_name->name;
        }
        return view('videos', [
           'arr' => $arr, 
            'name'=> $name
        ]);
    }
}
 