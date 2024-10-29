<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show($city = NULL)
    {
        return view('city.show', [
            'title' => 'CITY',
            'city' => $city
        ]);
    }
}
