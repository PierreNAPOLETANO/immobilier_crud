<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdController extends Controller
{public function index()
    {
        $ads = Ad::all();
        return view('ads.index', ['ads' => $ads]);
    }

    public function create()
    {
        $agents = Agent::all();
        return view('ads.create', ['agents' => $agents]);
    }

    public function store()
    {
        $validated = request()->validate([
            'ref_annonce'       => 'required',
            'prix_annonce'      => 'required',
            'surface_habitable' => 'required',
            'nombre_de_piece'   => 'required',
            'agent_id'          => ['integer', Rule::exists('agents', 'id')]
        ]);

        Ad::create($validated);

        return view('ads.store');
    }

    public function show($id)
    {
        $ad = Ad::find($id);
        return view('ads.show', ['ad' => $ad]);
    }

    public function edit($id)
    {
        $ad = Ad::find($id);
        return view('ads.edit', [
            'ad' => $ad
        ]);
    }

    public function update(Ad $ad)
    {
        $validated = request()->validate([
            'ref_annonce'       => 'required',
            'prix_annonce'      => 'required',
            'surface_habitable' => 'required',
            'nombre_de_piece'   => 'required',
            'agent_id'          => ['integer', Rule::exists('agents', 'id')]
        ]);

        $ad->update($validated);

        return view('ads.update');
    }

    public function destroy($id)
    {
        $ad = Ad::find($id);
        $ad->delete();
        return view('ads.destroy');
    }
}
