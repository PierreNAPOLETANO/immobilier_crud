@extends('index')

@section('title', "Création d'une annonce")

@section('content')
<form action="{{ route('annonces.store') }}" method="POST">
    @csrf
    @method('POST')
    <div>
        <select name="agent_id" id="agent_id">
            @foreach($agents as $agent)
            <option value="{{ $agent->id }}">M. {{ $agent->nom_agent }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="ref_annonce">Référence de l'annonce</label>
        <input type="text" name="ref_annonce" id="ref_annonce">
    </div>

    <div>
        <label for="prix_annonce">Prix de l'annonce</label>
        <input type="text" name="prix_annonce" id="prix_annonce">
    </div>

    <div>
        <label for="superficie_habitable">Superficie habitable</label>
        <input type="text" name="superfice_habitable" id="superfice_habitable">
    </div>

    <div>
        <label for="nombre_de_piece">Nombre de pieces</label>
        <input type="text" name="nombre_de_piece" id="nombre_de_piece">
    </div>

    <div>
        <button type="submit">Créer</button>
    </div>
</form>
@stop