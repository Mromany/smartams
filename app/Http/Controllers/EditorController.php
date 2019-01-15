<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function edit(Request $request , $ID = null)
    {

        return view('main.edit' , compact('ID'));
    }
}
