<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tests;

class SaveTests extends Controller
{
    public function save(Request $request)
    {
        print_r($request->all());
        $questions = $request->get('questions');
        $result = $request->get('results');
        $title = $request->get('title');
        $description = $request->get('description');
        $answers=[];
        $rights=[];
        $results=[];
        for ($i=0; $i<$questions; $i++)
        {
            $answers[] = [
                'name'=>$request->get($i.'-question'),
                'answer1' => $request->get($i.'-answer1'),
                'answer2' => $request->get($i.'-answer2'),
                'answer3' => $request->get($i.'-answer3'),
                'answer4' => $request->get($i.'-answer4'),
                ];

            $rights[] = ['right'=> $request->get('right'.$i)];
        }
        for ($i=1; $i<=$result; $i++)
        {
            $results[] = [
                'ot'=> $request->get($i.'-ot'),
                'do'=> $request->get($i.'-do'),
                'result'=> $request->get($i.'-result'),
            ];
        }
        $answers = json_encode($answers);
        $rights = json_encode($rights);
        $results = json_encode($results);
        $test = new Tests();
        $test->title = $title;
        $test->description = $description;
        $test->questions_answers = $answers;
        $test->right_answers = $rights;
        $test->results = $results;
        $test->save();
        return redirect()->route('test-list');
    }
}
