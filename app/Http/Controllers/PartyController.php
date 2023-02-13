<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response; 
use App\Models\Ancestry;
use App\Models\Background;
use App\Models\Character;
use App\Models\CharacterClass;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;

class PartyController extends Controller {
    /**
     * Display the party and form to add a new character
     */
    public function index(Request $request): Response {
        return Inertia::render('Party/Builder', [
            'ancestries' => DB::table('ancestries')->where('rarity', '=', 'c')->orderBy('name')->get(),
            'backgrounds' => DB::table('backgrounds')->where('rarity', '=', 'c')->orderBy('name')->get(),
            'characters' => DB::table('characters')->get(),
            'characterClasses' => DB::table('character_classes')->where('rarity', '=', 'c')->orderBy('name')->get()
        ]);
    }

    public function store(Request $request): RedirectResponse {
        $request->validate([
            'name' => 'required|string|max:255|unique:characters',
            'ancestry' => 'required|string|max:255|exists:ancestries,name',
            'background' => 'required|string|max:255|exists:backgrounds,name',
            'character_class' => 'required|string|max:255|exists:character_classes,name',
        ]);

        DB::table('characters')->insert([
            'name' => $request->name,
            'ancestry' => $request->ancestry,
            'background' => $request->background,
            'character_class' => $request->character_class,
            'created_at' => now()
        ]);

        return redirect('/party');
    }
}