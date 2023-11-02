<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Couchbase\Scope;
use Illuminate\Http\Request;
use App\Models\Tests;
class TestResults extends Controller
{
    public function testResults(int $id, Request $request)
    {
        $test = Tests::find($id);
        $rights = json_decode($test->right_answers);
        $results = json_decode($test->results);
        $score=0;
        $i=0;
        foreach($rights as $key)
        {
            if ($request->get('right'.$i) == $key->right)
            {
                $score++;
            }
            $i++;
        }
        foreach($results as $key)
        {
            if ($score >= $key->ot && $score <= $key->do)
            {
                $result = $key->result;
            }
        }
        return redirect()->route('results', ['id'=>$test->id, 'result'=>$result, 'score'=>$score]);
    }
}
