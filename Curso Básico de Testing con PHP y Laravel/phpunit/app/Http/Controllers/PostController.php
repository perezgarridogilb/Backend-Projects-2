<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function upload(Request $request) {
        /**
         * Recibe el request, sube la foto y redirecciona a profile
         */
        $request->file('photo')->store('profiles');

        return redirect('profile');
    }

    public function functionName($param) {
        
    }
}
