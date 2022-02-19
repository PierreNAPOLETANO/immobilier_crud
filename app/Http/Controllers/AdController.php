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

    public function store(Request $request)
    {
        // Code ne fonctionnant pas
        /*$validated = $request->validate([
            'ref_annonce'       => 'required',
            'prix_annonce'      => 'required',
            'surface_habitable' => 'required',
            'nombre_de_piece'   => 'required',
            'agent_id'          => ['integer', Rule::exists('agents', 'id')]
        ]);

        Ad::create($validated);*/

        // Code fonctionnant
        $ad = new Ad;

        $ad->ref_annonce         = $request->input('ref_annonce');
        $ad->prix_annonce        = $request->input('prix_annonce');
        $ad->superfice_habitable = $request->input('superfice_habitable');
        $ad->nombre_de_piece     = $request->input('nombre_de_piece');
        $ad->agent_id            = $request->input('agent_id');

        $ad->save();

        return view('ads.store');
    }

    public function show($id)
    {
        $ad = Ad::find($id);
        return view('ads.show', ['ad' => $ad]);
    }

    public function edit($id, Ad $ad)
    {
        $ad = Ad::find($id);
        return view('ads.edit', [
            'ad' => $ad
        ]);
    }

    public function update(Request $request, $id)
    {
        // Code ne fonctionnant pas
        /*$validated = $request->validate([
            'ref_annonce'       => 'required',
            'prix_annonce'      => 'required',
            'surface_habitable' => 'required',
            'nombre_de_piece'   => 'required',
            'agent_id'          => ['integer', Rule::exists('agents', 'id')]
        ]);

        $ad->update($validated);*/

        // Code fonctionnant
        $ad = Ad::find($id);
        $ad->ref_annonce = $request->input('ref_annonce');
        $ad->prix_annonce = $request->input('prix_annonce');
        $ad->superfice_habitable = $request->input('superfice_habitable');
        $ad->nombre_de_piece = $request->input('nombre_de_piece');
        $ad->update();

        return view('ads.update');
    }

    public function destroy($id)
    {
        $ad = Ad::find($id);
        $ad->delete();
        return view('ads.destroy');
    }
}
