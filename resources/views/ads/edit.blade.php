@extends('index')

@section('title', "Création d'une annonce")

@section('content')
<form action="{{ route('annonces.update',$ad->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mt-4">
        <label for="ref_annonce">Référence de l'annonce</label>
        <input type="text" name="ref_annonce" id="ref_annonce" value="{{ $ad->ref_annonce }}" class="form-control"> <!-- Champs pour saisir la référence d'une annonce -->
    </div>

    <div class="form-group mt-4">
        <label for="prix_annonce">Prix de l'annonce</label>
        <input type="text" name="prix_annonce" id="prix_annonce" value="{{ $ad->prix_annonce }}" class="form-control"> <!-- Champs pour saisir le prix d'une annonce -->
    </div>

    <div class="form-group mt-4">
        <label for="superficie_habitable">Superficie habitable</label>
        <input type="text" name="superfice_habitable" id="superfice_habitable" value="{{ $ad->superfice_habitable }}" class="form-control"> <!-- Champs pour saisir la superficie d'une annonce -->
    </div>

    <div class="form-group mt-4">
        <label for="nombre_de_piece">Nombre de pieces</label>
        <input type="text" name="nombre_de_piece" id="nombre_de_piece" value="{{ $ad->nombre_de_piece }}" class="form-control"> <!-- Champs pour saisir le nombre de pièces -->
    </div>

    <div class="d-flex justify-content-center mt-5 mb-5">
        <div class="form-group m-2">
            <button class="btn btn-warning" type="submit">Modifier</button>
        </div>
        <div class="form-group m-2">
            <a class="btn btn-primary" href="{{ route('annonces.index') }}">Retour aux annonces</a>
        </div>
    </div>
</form>
@stop