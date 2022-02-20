@extends('index') <!-- Ma page "hérite" de la index.blade.php à la racine du projet -->

@section('title', "Création d'une annonce") <!-- Ajout d'un titre de la page -->

@section('content') <!-- Ajout du contenu dans mapage -->
<form action="{{ route('annonces.store') }}" method="POST">
    @csrf <!-- Permet de protéger contre les attaques (CSRF) qui permet d'envoyer des requêtes à un système avec l'aide d'un utilisateur autorisé qui a la confiance du système -->
    @method('POST') <!-- Utilisation de la méthode POST -->
    <div class="form-group">
        <label for="agent_id">Agent</label>
        <!-- Affichage de tout les agents dans une liste -->
        <select name="agent_id" id="agent_id" class="form-select">
            @foreach($agents as $agent)
            <option value="{{ $agent->id }}">{{ $agent->nom_agent }} {{ $agent->prenom_agent }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="ref_annonce">Référence de l'annonce</label>
        <input type="text" name="ref_annonce" id="ref_annonce" class="form-control"> <!-- Champs pour saisir la référence d'une annonce -->
    </div>

    <div class="form-group">
        <label for="prix_annonce">Prix de l'annonce</label>
        <input type="text" name="prix_annonce" id="prix_annonce" class="form-control"> <!-- Champs pour saisir le prix d'une annonce -->
    </div>

    <div class="form-group">
        <label for="superficie_habitable">Superficie habitable</label>
        <input type="text" name="superfice_habitable" id="superfice_habitable" class="form-control"> <!-- Champs pour saisir la superficie d'une annonce -->
    </div>

    <div class="form-group">
        <label for="nombre_de_piece">Nombre de pieces</label>
        <input type="text" name="nombre_de_piece" id="nombre_de_piece" class="form-control"> <!-- Champs pour saisir le nombre de pièces -->
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Créer</button>
    </div>
</form>
@stop