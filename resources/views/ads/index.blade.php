@extends('index')

@section('title', "Création d'une annonce")

@section('content')

<div class="d-flex justify-content-center mt-5 mb-5">
    <!-- Boutton permettant d'être rediriger vers la page de création d'une annonce -->
    <a class="btn btn-info" href="{{ route('annonces.create') }}">Ajouter une annonce</a>
</div>

<div>
    <table class="table" id="ads">
        <thead>
            <tr>
                <th scope="col" class="text-center">Référence de l'annonce</th> <!-- Nom d'entête pour la référence de l'annonce -->
                <th scope="col" class="text-center">Prix de l'annonce</th> <!-- Nom d'entête pour le prix de l'annonce -->
                <th scope="col" class="text-center">Superficie habitable</th> <!-- Nom d'entête pour la superficie habitable  -->
                <th scope="col" class="text-center">Nombre de pieces</th> <!-- Nom d'entête pour le nombre de pièces  -->
                <th scope="col" class="text-center">Nom de l'agent</th> <!-- Nom d'entête pour le nom de l'agent -->
                <th scope="col" class="text-center">Prénom de l'agent</th> <!-- Nom d'entête pour le prénom de l'agent -->
                <th scope="col" class="text-center">Actions</th> <!-- Nom d'entête pour actions à effectuer -->
            </tr>
        </thead>
        <tbody>
            <!-- Permet  -->
            @foreach($ads as $ad)
            <tr>
                <td class="text-center">{{ $ad->ref_annonce }}</td> <!--  Affichage de la valeur ref_annonce -->
                <td class="text-center">{{ $ad->prix_annonce }}</td> <!-- Affichage de la valeur prix_annonce -->
                <td class="text-center">{{ $ad->superfice_habitable }}</td> <!-- Affichage de la valeur superfice_habitable -->
                <td class="text-center">{{ $ad->nombre_de_piece }}</td> <!--Affichage de la valeur nombre_de_piece -->
                <td class="text-center">{{ $ad->agent->nom_agent }}</th> <!--  Affichage de la valeur nom_agent de l'agent -->
                <td class="text-center">{{ $ad->agent->prenom_agent }}</td> <!-- Affichage de la valeur prenom_agent de l'agent -->
                <td class="text-center">
                    <div class="row">
                        <div class="col text-center">
                            <!-- Bouton pour être redirigé vers la page pour afficher une annonce bien précise -->
                            <a class="btn btn-primary" href="{{ route('annonces.show', $ad->id) }}" target="_blank">Afficher</a>
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
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop