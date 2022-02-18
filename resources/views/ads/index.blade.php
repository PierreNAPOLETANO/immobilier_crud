@extends('index')

@section('title', "Création d'une annonce")

@section('content')
<div>
    <a href="{{ route('annonces.create') }}">Ajouter une annonce</a>
</div>
@foreach($ads as $ad)
<p>Nom de l'agent : {{ $ad->agent->nom_agent }}</p>
<p>Référence : {{ $ad->ref_annonce }}</p>
<p>Prix : {{ $ad->prix_annonce }}</p>
<p>Superficie habitable{{ $ad->superfice_habitable }}</p>
<p>Nombre de pièces : {{ $ad->nombre_de_piece }}</p>

<br>

<a href="{{ route('annonces.edit', $ad->id) }}">Modifier</a>
<a href="{{ route('annonces.show', $ad->id) }}">Afficher</a>
<form action="{{ route('annonces.destroy', $ad->id) }}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit">Suuprimer</button>
</form>

<hr>
@endforeach
@stop