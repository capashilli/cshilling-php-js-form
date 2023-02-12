<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response; 
use App\Models\Ancestry;
use App\Models\Background;
use App\Models\Character;
use App\Models\CharacterClass;
use Illuminate\Support\Facades\DB;

class PartyController extends Controller {

    /**
     * Display the party and form to add a new character
     */
    public function index(Request $request): Response {
        return Inertia::render('Party/Builder', [
            'ancestries' => DB::table('ancestries')->where('rarity', '=', 'c')->get(),
            'backgrounds' => DB::table('backgrounds')->where('rarity', '=', 'c')->get(),
            'characters' => DB::table('characters')->get(),
            'characterClasses' => DB::table('character_classes')->where('rarity', '=', 'c')->get()
        ]);
    }

    public function store(Request $request): Response {
        return null;
    }
}