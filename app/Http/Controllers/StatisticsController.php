<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commande;

class StatisticsController extends Controller
{
    public function __invoke(Request $request)
    {
        $actualYear = $request->year;
        // Années disponibles
        $years = range(Commande::oldest()->first()->created_at->year, now()->year);
        return view('back.restaurant.statistiques', compact(
            'years',
            'actualYear'
        ));    }
}
