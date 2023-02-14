<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
        // TODO: Implement __invoke() method.
    }
}
