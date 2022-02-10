<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(Request $request)
    {
        $departure = $request->departure;
        return view('offers');
    }
}
