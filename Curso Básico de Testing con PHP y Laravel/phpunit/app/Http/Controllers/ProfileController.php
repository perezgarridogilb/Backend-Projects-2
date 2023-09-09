<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function upload(Request $request) {

        $request->validate([
            'photo' => 'required'
        ]);
        /**
         * Recibe el request, sube la foto y redirecciona a profile
         */
        $request->file('photo')->store('profiles');

        return redirect('profile');
    }

    public function functionName($param) {
        
    }
}
