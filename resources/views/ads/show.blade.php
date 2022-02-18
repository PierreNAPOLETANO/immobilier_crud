@extends('index')

@section('title', "Création d'une annonce")

@section('content')
<h1>Référence : {{ $ad->ref_annonce }}</h1>
<p>Prix : {{ $ad->prix_annonce }}</p>
<p>Superficie habitable : {{ $ad->superfice_habitable }}</p>
<p>Nb de pièces : {{ $ad->nombre_de_piece }}</p>
@stop