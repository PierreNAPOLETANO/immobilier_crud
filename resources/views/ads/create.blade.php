@extends('index')

@section('title', "Création d'une annonce")

@section('content')
<form action="{{ route('annonces.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="agent_id">Agent</label>
        <select name="agent_id" id="agent_id" class="form-select">
            @foreach($agents as $agent)
            <option value="{{ $agent->id }}">{{ $agent->nom_agent }} {{ $agent->prenom_agent }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="ref_annonce">Référence de l'annonce</label>
        <input type="text" name="ref_annonce" id="ref_annonce" class="form-control">
    </div>

    <div class="form-group">
        <label for="prix_annonce">Prix de l'annonce</label>
        <input type="text" name="prix_annonce" id="prix_annonce" class="form-control">
    </div>

    <div class="form-group">
        <label for="superficie_habitable">Superficie habitable</label>
        <input type="text" name="superfice_habitable" id="superfice_habitable" class="form-control">
    </div>

    <div class="form-group">
        <label for="nombre_de_piece">Nombre de pieces</label>
        <input type="text" name="nombre_de_piece" id="nombre_de_piece" class="form-control">
    </div>

    <div class="form-group">
        <button type="submit">Créer</button>
    </div>
</form>
@stop