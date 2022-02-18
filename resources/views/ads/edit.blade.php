@extends('index')

@section('title', "Création d'une annonce")

@section('content')
<form action="{{ route('annonces.edit', $ad->id) }}" method="post">
    @csrf
    <div>
        <label for="ref_annonce">Référence de l'annonce</label>
        <input type="text" name="ref_annonce" id="ref_annonce" value="{{ $ad->ref_annonce }}">
    </div>

    <div>
        <label for="prix_annonce">Prix de l'annonce</label>
        <input type="text" name="prix_annonce" id="prix_annonce" value="{{ $ad->prix_annonce }}">
    </div>

    <div>
        <label for="superficie_habitable">Superficie habitable</label>
        <input type="text" name="superfice_habitable" id="superfice_habitable" value="{{ $ad->superfice_habitable }}">
    </div>

    <div>
        <label for="nombre_de_piece">Nombre de pieces</label>
        <input type="text" name="nombre_de_piece" id="nombre_de_piece" value="{{ $ad->nombre_de_piece }}">
    </div>

    <div>
        <button type="submit">Modifier</button>
    </div>
</form>
@stop