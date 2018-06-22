@extends('templates.global')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/annonce.css') }}">
@endsection

@section('content')

<div class="container-fluid" id="annonce-wrapper">
    <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">	
				<div class="col-md-4">
					<div class="product col-md-12 service-image-left">
                    
						<center>
							<img id="item-display" src={{ $annonce->image}} alt=""></img>
						</center>
					</div>
					
				</div>
					
				<div class="col-md-8">
					<div class="product-title">{{ $annonce->title}}</div>
					<div class="product-price">{{ $annonce->price}} €</div>
					<hr>
					<div class="btn-group cart">
						<button type="button" class="btn btn-success">
							Contacter le vendeur
						</button>
					</div>
					@if ($annonce->user == $currentUserId)
					<div class="btn-group">
						<button type="button" class="btn btn-default">
							Modifier mon annonce
						</button>
					</div>
					@endif
				</div>
			</div> 
		</div>
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
							{!! $annonce->description !!}
							</section>
										  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
								
						</section>
						
					</div>
					<div class="tab-pane fade" id="service-three">
												
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>
@endsection