<?php

namespace App\Http\Controllers;

use App\Services\Matrix;

class PageController extends Controller
{
    public function __construct ( Matrix $matrix )
    {
        $this->matrix = $matrix;
    }

    public function index ()
    {
        $thomasMatrix = $this->matrix->getThomas();

        return view('index')->with(compact('thomasMatrix'));
    }
}
