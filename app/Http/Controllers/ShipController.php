<?php

namespace App\Http\Controllers;

use App\Models\Ship;

class ShipController extends Controller
{
    public function index()
    {
        $ships = Ship::where('status', true)->get();

        return view('ships.index', compact('ships'));
    }

    public function show(Ship $ship)
{
    if (!$ship->status) {
        abort(404);
    }

    return view('ships.show', compact('ship'));
}
}