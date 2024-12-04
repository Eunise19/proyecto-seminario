<!doctype html>
<html lang="en">
  <head>
  
  	<title>Iniciar Sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="assets/https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assetslogin/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(assetslogin/images/bg.jpg);">
		
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      			<h3 class="mb-4 text-center">Iniciar Sesion</h3>
						<form class="mt-4" method="POST" action="{{route('login.store')}}">
						@csrf
							<div class="form-group py-3">
								<input type="email" class="form-control" placeholder="Ingrese su correo" id="email" name="email">
							</div>
							<div class="form-group py-3">
								<input  type="password" class="form-control" placeholder="Ingrese su contraseña" id="password" name="password" >
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group py-3">
							@error('message')        
								<p class=" form-control">* {{ $message }}</p>
							@enderror
							</div>
							<button type="submit" class="form-control btn btn-primary submit px-3">Iniciar Sesion</button>
							<div class="form-group d-md-flex">
											
							</div>
						</form> 
		    		</div>
				</div>
			</div>
		</div>
	</section>

	<script src="assetslogin/js/jquery.min.js"></script>
  <script src="assetslogin/js/popper.js"></script>
  <script src="assetslogin/js/bootstrap.min.js"></script>
  <script src="assetslogin/js/main.js"></script>

	</body>
</html>

