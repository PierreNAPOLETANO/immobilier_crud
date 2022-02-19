@extends('index')

@section('title', "Création d'une annonce")

@section('content')

<div class="d-flex justify-content-center mt-5">
    <input class="form-control" type="text" id="searchAd" onkeyup="search_ad()" placeholder="Rechercher la référence d'une annonce">
</div>

<div class="d-flex justify-content-center mt-5 mb-5">
    <a class="btn btn-info" href="{{ route('annonces.create') }}">Ajouter une annonce</a>
</div>

<div>
    <table class="table" id="ads">
        <thead>
            <tr>
                <th scope="col" class="text-center">Référence de l'annonce</th>
                <th scope="col" class="text-center">Prix de l'annonce</th>
                <th scope="col" class="text-center">Superficie habitable</th>
                <th scope="col" class="text-center">Nombre de pieces</th>
                <th scope="col" class="text-center">Nom de l'agent</th>
                <th scope="col" class="text-center">Prénom de l'agent</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ads as $ad)
            <tr>
                <td class="text-center">{{ $ad->ref_annonce }}</td>
                <td class="text-center">{{ $ad->prix_annonce }}</td>
                <td class="text-center">{{ $ad->superfice_habitable }}</td>
                <td class="text-center">{{ $ad->nombre_de_piece }}</td>
                <td class="text-center">{{ $ad->agent->nom_agent }}</th>
                <td class="text-center">{{ $ad->agent->prenom_agent }}</td>
                <td class="text-center">
                    <div class="row">
                        <div class="col text-center">
                            <a class="btn btn-primary" href="{{ route('annonces.show', $ad->id) }}" target="_blank">Afficher</a>
                        </div>
                        <div class="col text-center">
                            <a class="btn btn-warning" href="{{ route('annonces.edit', $ad->id) }}" target="_blank">Modifier</a>
                        </div>
                        <div class="col text-center">
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