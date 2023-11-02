<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tests;

class ViewTest extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function list()
    {
        return view('look', ['tests'=>Tests::all()]);
    }

    public function make()
    {
        return view('make');
    }

    public function readyTest(int $id)
    {
        return view('test-ready', ['test'=>Tests::find($id)]);
    }

    public function test(int $id, Request $request)
    {
        $test = Tests::find($id);
        $questions = json_decode($test->questions_answers);
        $i = 0;
        return view('test', ['questions'=>$questions, 'test'=>Tests::find($id), 'i'=>$i]);
    }

    public function results(int $id ,Request $request, int $score, string $result)
    {
        return view('results', ['score' => $score, 'result'=>$result]);
    }

}
