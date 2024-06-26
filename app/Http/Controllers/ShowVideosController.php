<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ShowVideosController extends Controller
{ 
    public function show()
    {
        $arr=DB::table('videos')->select('*')->limit(10)->get();
        return view('main', [
            'arr' => $arr
        ]);
    }
}
