<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::whereDate('departure_time', '2023-01-06')->get();
        return view('trains.index', compact('trains'));
    }
}
