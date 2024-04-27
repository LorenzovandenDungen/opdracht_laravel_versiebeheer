<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bier;

class BierController extends Controller
{
    /**
     * Toon een boomweergave van alle bieren met hun onderliggende merken.
     */
    public function boom()
    {
        // Haal alle bieren op
        $bieren = Bier::all();

        // Retourneer de weergave met de data
        return view('bieren.boom', compact('bieren'));
    }

    /**
     * Toon andere bieren van hetzelfde biermerk.
     */
    public function andereBieren($id)
    {
        // Zoek het bier op basis van de ID
        $bier = Bier::findOrFail($id);

        // Haal andere bieren van hetzelfde biermerk op
        $andereBieren = Bier::where('valt_onder_id', $bier->valt_onder_id)
                            ->where('id', '!=', $id) // Hetzelfde bier uitsluiten
                            ->get();

        // Retourneer de weergave met de data
        return view('bieren.andere', compact('bier', 'andereBieren'));
    }

    /**
     * Toon alle bieren uit een bepaalde categorie.
     */
    public function bierenPerCategorie($categorieId)
    {
        // Haal alle bieren op die tot de opgegeven categorie behoren
        $bieren = Bier::where('categorie_id', $categorieId)->get();

        // Retourneer de weergave met de data
        return view('bieren.per_categorie', compact('bieren'));
    }

    /**
     * Toon merken met submerken en het aantal submerken.
     */
    public function merkenMetSubmerken()
    {
        // Haal alle hoofdmerken op die submerken hebben
        $merken = Bier::has('submerken')->withCount('submerken')->get();

        // Retourneer de weergave met de data
        return view('bieren.met_submerken', compact('merken'));
    }
}
