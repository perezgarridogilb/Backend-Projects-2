<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        return Movie::all();
    }

    public function show($id) {
        return Movie::find($id);
    }

    public function store() {
        $movie = Movie::create
    }

}
