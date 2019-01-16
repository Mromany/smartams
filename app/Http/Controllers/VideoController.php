<?php

namespace App\Http\Controllers;

use App\Spottime;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show()
    {
        $GAMS = Video::get();
        return view('main.welcome', compact('GAMS'));
    }

    public function upload(Request $request)
    {
        try {
            if ($request->isMethod('post')) {
                $fileName = Video::get()[count(Video::get()) - 1]->ID + 1 . "_" . $request->file('upload')->getClientOriginalName();
                $ClUF = new Video();
                $ClUF->Title = $request->file('upload')->getClientOriginalName();
                $ClUF->Path = $fileName;
                $ClUF->save();
                $request->file('upload')->move(base_path() . '/public/video', $fileName);
                return redirect('edit/' . $fileName);
            }
            return view('main.upload');

        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function addspot(Request $request)
    {
        try {
            if ($request->isMethod('post')) {
                foreach ($request->input('sp') as $item)
                {
                    if (isset($item))
                    {
                        $ClUF = new Spottime();
                        $ClUF->VID = $request->input('videos');
                        $ClUF->Sp_Time = $item;
                        $ClUF->save();
                    }
                }
                return redirect()->back();
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
