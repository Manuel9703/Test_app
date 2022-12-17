<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function show()
    {
        return Film::all();
    }

    public function create()
    {

    }

    public function delete()
    {

    }

//    protected function show(string $slug)
//    {
//        return Film::where('slug', $slug)->first();
//    }
}
