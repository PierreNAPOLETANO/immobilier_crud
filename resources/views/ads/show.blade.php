@extends('index')

@section('title', "Création d'une annonce")

@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="card">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Référence : {{ $ad->ref_annonce }}</li>
            <li class="list-group-item">Prix : {{ $ad->prix_annonce }}</li>
            <li class="list-group-item">Superficie habitable : {{ $ad->superfice_habitable }}</li>
            <li class="list-group-item">Nb de pièces : {{ $ad->nombre_de_piece }}</li>

            <li class="list-group-item">Nom de l'agent : {{ $ad->agent->nom_agent }}</li>
            <li class="list-group-item">Préom de l'agent : {{ $ad->agent->prenom_agent }}</li>
        </ul>
        <div class="card-body">
            <div class="row">
                <div class="col text-center">
                    <!-- Permet de renvoyer l'utilisateur vers la pages contenant toute les annonces -->
                    <a class="btn btn-primary" href="{{ route('annonces.index') }}">Retour aux annonces</a>
                </div>
                <div class="col text-center">
                    <!-- Bouton pour être redirigé vers la page de modition de l'annonce -->
                    <a class="btn btn-warning" href="{{ route('annonces.edit', $ad->id) }}" target="_blank">Modifier</a>
                </div>
                <div class="col text-center">
                    <!-- Bouton pour être redirigé vers la page de suppression de l'annonce -->
                    <form action="{{ route('annonces.destroy', $ad->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Suprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop