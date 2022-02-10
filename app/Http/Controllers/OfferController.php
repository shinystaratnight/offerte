<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    public function index(Request $request)
    {

        $departure = $request->departure ?? 'palermo';
        $month = $request->month ?? now()->format('m');
        $all_offers = [];
        $month_names = [
            1 => 'gennaio',
            2 => 'febbraio',
            3 => 'marzo',
            4 => 'aprile',
            5 => 'maggio',
            6 => 'giugno',
            7 => 'luglio',
            8 => 'agosto',
            9 => 'settembre',
            10 => 'ottobre',
            11 => 'novembre',
            12 => 'dicembre',
        ];
        for ($m = 1; $m <= 12; $m++)
        {
            $offers = DB::table('offers')
                ->where('departure', $departure)
                ->whereMonth('from', $m)
                ->paginate(10, ['*'], $month_names[$m]);

            $offers->appends([
                'departure' => $departure,
                'month' => $m
            ]);
            $all_offers[$m] = $offers;
        }

        return view('offers', [
            'offers' => $all_offers,
            'departure' => $departure,
            'month' => $month,
            'month_names' => $month_names,
        ]);
    }
}
