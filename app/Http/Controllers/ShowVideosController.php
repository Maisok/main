<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ShowVideosController extends Controller
{ 
    public function show()
    {
        $arr=DB::table('videos')->select('id', 'title','description', 'imageSRC')->limit(10)->get();
        return view('main', [
            'arr' => $arr
        ]);
    }
}
