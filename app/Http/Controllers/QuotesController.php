<?php

namespace App\Http\Controllers;

use Lang;
use Request;
use Illuminate\Support\Collection;

class QuotesController extends Controller
{
    public function get ()
    {
        $collection = new Collection(Lang::get('quotes'));
        $collection = $collection->except([Request::input('current')])->all();

        $quotes = [];

        foreach ( $collection as $key => $quote )
        {
            $quotes[] = [ 'index' => $key, 'quote' => $quote ];
        }

        shuffle($quotes);

        return response()->json($quotes[0]);
    }
}
