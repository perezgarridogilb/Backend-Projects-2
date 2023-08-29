<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function upload(Request $request) {
        $request->file('photo')->store('profiles');

        return redirect('profile');
    }

    public function functionName($param) {
        
    }
}
