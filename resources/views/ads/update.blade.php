@extends('index')

@section('title', "Création d'une annonce")

@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="col text-center">
        <!-- Permet de renvoyer l'utilisateur vers la pages contenant toute les annonces -->
        <a class="btn btn-primary" href="{{ route('annonces.index') }}">Retour aux annonces</a>
    </div>
</div>
@stop