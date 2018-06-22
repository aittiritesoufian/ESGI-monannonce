@extends('templates.global')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/accueil.css') }}">
@endsection

@section('content')
    <div class="container" id="accueil">
        <img id="bg" src={{ asset('img/bg.jpg')}}>
        <div class="text">
            <h1>weshAnnonce</h1>
            <h2>"Le meilleur site d'annonce sur la drogue<br>tmtc la famille"<br><span>par Dread Pirate Roberts</span></h2>
        </div>
    </div>
@endsection