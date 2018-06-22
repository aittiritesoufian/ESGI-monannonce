@extends('templates.global')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/annonces.css') }}">
@endsection

@section('content')
<div class="container" id="annonce-wrapper">
    <div id="products" class="row list-group">
        @foreach($annonces as $annonce)
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">{{ $annonce->title}}</h4>
                    <p class="group inner list-group-item-text">{!! $annonce->description !!}</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">{{ $annonce->price}} €</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="/annonce/{{ $annonce->id }}">Voir l'annonce</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('search')
    <form class="navbar-form" role="search" method="POST" action="/annonces/">
        <div class="input-group">
            {{ csrf_field() }}
            <input id="search" type="text" name="search" class="form-control" value="{{ app('request')->input('search') }}" placeholder="Rechercher une annnonce">
            <span class="input-group-btn">
                <button type="reset" class="btn btn-default">
                    <span class="glyphicon glyphicon-remove">
                        <span class="sr-only"></span>
                    </span>
                </button>
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search">
                        <span class="sr-only">Recherche</span>
                    </span>
                </button>
            </span>
        </div>
    </form>
@endsection