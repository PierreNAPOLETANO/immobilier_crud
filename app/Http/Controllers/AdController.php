<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdController extends Controller
{
    /**
     * Permet d'afficher toutes mes annonces avec avec pour chaque annonce l'agent concerné
     */
    public function index()
    {
        $ads = Ad::all(); // Je recupère toutes mes annonces en base de données
        return view('ads.index', ['ads' => $ads]); // Je retourne ma vue, dans laquelle j'ajoute toutes mes annonnece afin de pouvoir les afficher
    }

    /**
     * Permet de récupérer tout les agents afin de pouvoir en associer avec une annonce
     */
    public function create()
    {
        $agents = Agent::all(); // Récupération des données liées aux agents
        return view('ads.create', ['agents' => $agents]); // Je retourne ma vue, dans laquelle j'ajoute tous mes agents afin de pouvoir
                                                          //  les afficher et en associer 1 à une annonce je créerai
    }

    /**
     * Permet de stoquer en bdd mon annonce via une requête
     */
    public function store(Request $request)
    {           
        $ad = new Ad; // Je créer une nouvelle Annonce

        $ad->ref_annonce         = $request->input('ref_annonce'); // J'accède à la saisie liée à la référence de l'annonce
        $ad->prix_annonce        = $request->input('prix_annonce'); // J'accède à la saisie liée au rix de l'annonce
        $ad->superfice_habitable = $request->input('superfice_habitable'); // J'accède à la saisie liée à la surce habitable 
        $ad->nombre_de_piece     = $request->input('nombre_de_piece'); // J'accède à la saisie liée à au nombre de pièces
        $ad->agent_id            = $request->input('agent_id'); // J'accède à la sélection d'un agent

        $ad->save(); // Je sauvegarde mon annonce

        return view('ads.store'); // Je retourne vers ma vue store
    }

    /**
     * Permet d'afficher une afficher avec l'agent correspondant
     */
    public function show($id)
    {
        $ad = Ad::find($id); // Je récupère une annonce en fonction de l'id
        return view('ads.show', ['ad' => $ad]); // Je retourne ma vue, dans laquelle j'ajoute toutes mon annonce afin de pouvoir l'afficher
    }

    /**
     * Permet d'editer une annonce
     */
    public function edit($id, Ad $ad)
    {
        $ad = Ad::find($id); // Je récupère une annonce en fonction de l'id
        return view('ads.edit', ['ad' => $ad]); // Je retourne ma vue, dans laquelle j'ajoute toutes mon annonce 
                                                // afin de pouvoir l'afficher les valeur dans chaque champs
    }

    /**
     * Permet de mettre à jour mon annonce
     */
    public function update(Request $request, $id)
    {
        $ad = Ad::find($id); // Je récupère une annonce en fonction de l'id
        
        $ad->ref_annonce = $request->input('ref_annonce'); // J'accède à la saisie liée à la référence de l'annonce
        $ad->prix_annonce = $request->input('prix_annonce'); // J'accède à la saisie liée au rix de l'annonce
        $ad->superfice_habitable = $request->input('superfice_habitable'); // J'accède à la saisie liée à la surce habitable 
        $ad->nombre_de_piece = $request->input('nombre_de_piece'); // J'accède à la saisie liée à au nombre de pièces

        $ad->update(); // Je met à jour mon annonce

        return view('ads.update'); // Je renvoie la vue vers laquelle je veux être renvoyé après la soumission du formulaire
    }

    public function destroy($id)
    {
        $ad = Ad::find($id); // Je récupère une annonce en fonction de l'id
        $ad->delete(); // Je supprime mon annonce
        return view('ads.destroy'); // Je renvoie la vue vers laquelle je veux être renvoyé après la soumission du formulaire
    }
}
