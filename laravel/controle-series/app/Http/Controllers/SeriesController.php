<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = [
            'Lost',
            'Demolidor',
            'Loki'
        ];
        
        return view('Listar-series', compact(var_name:'series'));
    }
}
