<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response; 

class PartyController extends Controller {

    /**
     * Display the form to add a character
     */
    public function add(Request $request): Response
    {
        return Inertia::render('Party/Builder', [
            'user' => $request->user(),
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }
}