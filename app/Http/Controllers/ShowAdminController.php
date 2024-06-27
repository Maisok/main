<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use DB;
use Illuminate\Http\Request;

class ShowAdminController extends Controller
{
    public function showvideos(){
        $arr=DB::table('videos')->select('*')->get();
        return view('admin', [
            'arr' => $arr
        ]);
    }




    public function admincat(Request $request){
       $namecat=$request->input('namecat');
       $arr=Categories::insert();
    }
}
