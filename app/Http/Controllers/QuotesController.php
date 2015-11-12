<?php

namespace App\Http\Controllers;

use Lang;

class QuotesController extends Controller
{
    public function get ()
    {
        return response()->json(Lang::get('quotes'));
    }
}
