@extends('templates.global')

@section('style')
<style>
#annonce-wrapper{
	margin-top: 70px;
}
</style>
@endsection

@section('content')
<div class="container-fluid" id="annonce-wrapper">
	<div class="content-wrapper">	
		<div class="container-fluid">		
			<div class="col-md-6 col-md-offset-3 product-info">
				<h2>Inscription</h2>
				<form method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" id="name" name="name">
					</div>

					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>

					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>

					<div class="form-group">
						<button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
					</div>
					@includeWhen($error, 'partials.formerrors', ['error' => $error])
				</form>
			</div>
		</div>
	</div>
</div>
@endsection