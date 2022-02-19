@extends('index')

@section('title', "Création d'une annonce")

@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="col text-center">
        <a class="btn btn-primary" href="{{ route('annonces.index') }}">Retour aux annonces</a>
    </div>
</div>
@stop