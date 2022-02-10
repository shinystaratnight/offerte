<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    public function getMonthNames()
    {
        return [
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
    }

    public function index(Request $request)
    {
        $departure = $request->departure ?? 'palermo';
        $month = $request->month ?? now()->format('m');
        $all_offers = [];
        $month_names = $this->getMonthNames();

        for ($m = 1; $m <= 12; $m++)
        {
            $offers = DB::table('offers')
                ->where('departure', $departure)
                ->whereMonth('from', $m)
                ->orderBy('created_at', 'desc')
                ->paginate(10, ['*'], $month_names[$m]);

            $offers->appends([
                'departure' => $departure,
                'month' => $m
            ]);
            $all_offers[$m] = $offers;
        }

        return view('offers.index', [
            'offers' => $all_offers,
            'departure' => $departure,
            'month' => $month,
            'month_names' => $month_names,
        ]);
    }

    public function admin(Request $request)
    {
        $departure = $request->departure ?? 'palermo';
        $month = $request->month ?? now()->format('m');
        $all_offers = [];
        $month_names = $this->getMonthNames();

        for ($m = 1; $m <= 12; $m++)
        {
            $offers = DB::table('offers')
                ->where('departure', $departure)
                ->whereMonth('from', $m)
                ->orderBy('created_at', 'desc')
                ->paginate(10, ['*'], $month_names[$m]);

            $offers->appends([
                'departure' => $departure,
                'month' => $m
            ]);
            $all_offers[$m] = $offers;
        }

        return view('offers.admin', [
            'offers' => $all_offers,
            'departure' => $departure,
            'month' => $month,
            'month_names' => $month_names,
        ]);
    }

    public function create(Request $request)
    {
        return view('offers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'departure' => 'in:palermo,catalina,roma,milano',
            'destination' => 'bail|required|max:50',
            'from' => 'bail|required|date',
            'to'=> 'bail|required|date|after:from',
            'price' => 'bail|required|numeric',
            'link' => 'bail|required|url'
        ]);
        $validatedData['hot'] = false;
        if ($request->has('hot')) {
            $validatedData['hot'] = true;
        }
        Offer::create($validatedData);
        return redirect(route('admin'));
    }

    public function getContent(Request $request)
    {
        $ids = $request->input('ids');
        Debugbar::log($ids);
    }
}
