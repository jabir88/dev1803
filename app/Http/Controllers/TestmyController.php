<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestmyController extends Controller
{
    public function test()
    {
        $collection=   collect([1,2,3,4,5]);
        return $collection;
        $cut=   $collection->splice(2);
        // return $cut;
    }
}
