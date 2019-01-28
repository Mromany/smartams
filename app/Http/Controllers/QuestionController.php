<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function add(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $ClUF = new Question();
            $ClUF->Question = $request->input('question');
            $ClUF->D_type = $request->input('type');
            $ClUF->Answer1 = $request->input('answer1');
            $ClUF->T1 = $request->input('Timea1');
            $ClUF->Answer2 = $request->input('answer2');
            $ClUF->T2 = $request->input('Timea2');
            $ClUF->Answer3 = $request->input('answer3');
            $ClUF->T3 = $request->input('Timea3');
            $ClUF->Answer4 = $request->input('answer4');
            $ClUF->T4 = $request->input('Timea4');
            $ClUF->save();
        }
        return redirect()->back();
    }
    public function DragnDrop()
    {
        return view('main.ddq');
    }

}
