<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
//use app models movie viene aggiunta con l'estensione quando ho scritto movie a riga 15 (altrimenti va scritto a mano)
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //recupero i records dal database (questa è una query, come quelle usate su mamp)
        $movies = Movie::all();
        //dopo ciò, fare il compact di movies

        return view('pages.welcome', compact('movies'));
    }
}
