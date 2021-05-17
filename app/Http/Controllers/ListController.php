<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ListController extends Controller
{
    private $totalpage = 3;

    function home()
    {
        $lista = Http::get("https://restcountries.eu/rest/v2/regionalbloc/eu");
        $listaArray = $lista->json();
        return view('home', compact("listaArray"));
    }
}
