<?php

namespace App\Http\Controllers;

use App\Question;
use App\Spottime;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function edit(Request $request , $ID = null)
    {
        $ClUF = Spottime::where('VID',$ID)->get()->pluck('Sp_Time')->toArray();

        return view('main.edit' , compact('ID' , 'ClUF'));
    }
}
