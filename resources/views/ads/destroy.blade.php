@extends('index')

@section('title', "Création d'une annonce")

@section('content')
<div class="col text-center">
    <a class="btn btn-primary" href="{{ route('annonces.index') }}">Retour aux annonces</a>
</div>
@stop