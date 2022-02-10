<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function palemo(Request $request)
    {
        return view('offers.palemo');
    }

    public function catalina(Request $request)
    {
        return view('offers.catalina');
    }

    public function roma(Request $request)
    {
        return view('offers.roma');
    }

    public function milano(Request $request)
    {
        return view('offers.milano');
    }
}
