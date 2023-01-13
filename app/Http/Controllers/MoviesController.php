<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        return view("admin.movies.index");
    }

    public function edit() {
        return view("admin.movies.edit");
    }
}
