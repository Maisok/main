<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Channels;

class AddVideoController extends Controller
{
    public function addvideos(Request $request)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        $ext = $request->file('video')->getClientOriginalExtension();
        $ext2 = $request->file('image')->getClientOriginalExtension();

        if ($ext != 'mp4' && ($ext2 != 'jpeg' || $ext2!='jpg')) {
            echo 'dsffsdf';
        } else {
            $origname = $request->file('video')->getClientOriginalName();
            $unicname = time() . '_' . $origname;

            $origname2 = $request->file('image')->getClientOriginalName();
            $unicname2 = time() . '_' . $origname2;

            $request->file('video')->storeAs('video', $unicname);
            $request->file('image')->storeAs('image', $unicname2);


            DB::table('videos')->insert([
                'title' => $name,
                'description' => $desc,
                'user_id' => '1',
                'videoSRC' => $unicname,
                'imageSRC' => $unicname2
            ]);
            return to_route("main");
        }
    }
}
