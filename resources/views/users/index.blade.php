<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assetuser/img/favicon.png" rel="icon">
  <link href="assetuser/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assetuser/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assetuser/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assetuser/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assetuser/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assetuser/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assetuser/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assetuser/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="">{{ auth()->user()->name }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assetuser/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>Bienvenido a <span>OdontoChichas</span> de la ciudad de Tupiza.</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">Perfil</a></li>
          <li><a class="nav-link" href="#resume">Historial</a></li>
          <li><a class="nav-link" href="#contact">Reservar Cita</a></li>
          <li><a class="nav-link text-red" href="{{ route('login.destroy') }}">Cerrar Sesion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>Perfil</h2>
        <p>{{ auth()->user()->name }}</p>
      </div>
      
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assetuser/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          
          
          <div class="row">
            <div class="col-lg-6">
              <ul>
                
                <li><i class="bi bi-chevron-right"></i> <th>Alergia: </th> <span>&nbsp;{{ $usuario->alergia }} </span></li>
                <li><i class="bi bi-chevron-right"></i> <th>Correo electronico: </th> <span>&nbsp;{{ $usuario->email }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <th>Telefono:</th> <span>&nbsp;{{$usuario->telefono }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <th>Fecha de Nacimiento: </th> <span>&nbsp;{{ $usuario->fecha_nacimiento }}</span></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
     
    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="{{ count($usuario->historiales) }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Numero de Atenciones</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="{{ count($usuario->citas) }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Numero de citas</p>
          </div>
        </div>
      </div>

    </div><!-- End Counts -->

  </section><!-- End About Section -->

  <!-- ======= Historiales Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Historiales</h2>
      </div>
      
      <div class="row">
        <div class="col-lg-6">
        @if (count($historiales) > 0)
          @php
            $contador = 1;
          @endphp
          @foreach ($historiales as $historial)
          <div class="resume-item pb-0">
          <h3 class="resume-title">historial_0{{$contador}}</h3>
            <h4>{{$historial->servicio->nombre}}</h4>
            <h5>Doctor: {{$historial->medico->nombre_apellido}}</h5>
            <p><em>DESCRIPCION: {{$historial->servicio->descripcion}}</em></p>
            <h5>Fecha de consulta: {{$historial->fecha}}</h5>
          </div>
          @php
            $contador++;
          @endphp
          @endforeach
        @else
          <p>No hay historiales médicos registrados para este usuario.</p>
        @endif
    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Reservar citas</h2>
        <p>Citas</p>
        <table class="table table-dark">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre de Medico</th>
              <th>Servicio</th>
              <th>Fecha</th>
            </tr>
          </thead>
          <tbody>
            @php
              $contador =1;
            @endphp
            @foreach ($citas as $cita)
              <tr>
                <td>Cita_0{{$contador}}</td>
                <td>{{$cita->medico->nombre_apellido}}</td>
                <td>{{$cita->servicio->nombre}}</td>
                <td>{{$cita->fecha}}</td>
              </tr>
            @php
              $contador++;
            @endphp
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Dirección</h3>
            <p>Av. Chichas Nro. # 100, Tupiza-Bolivia</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Reservar Cita</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Correo</h3>
            <p>odontochichas@test.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Telefono</h3>
            <p>+555 6666666</p>
          </div>
        </div>
      </div>

      <form method="POST" action="{{route('cita.user')}}" role="form" class="php-email-form mt-4">
      @csrf
        <div class="row">
          <div class="col-md-12 form-group mt-3 mt-md-0">
          <label for="id_paciente">Paciente:</label>
            <select name="id_pacientes" id="id_pacientes" class="form-control">
              <option value="{{ auth()->user()->id }}">{{ auth()->user()->name }}</option>
            </select>
          </div>
          <div class="col-md-12 form-group mt-3 mt-md-0">
          <label for="id_medico">Médico:</label>
            <select name="id_medicos" id="id_medicos" class="form-control form-dark">
            @foreach ($medicos as $medico)
              <option value="{{ $medico->id }}">{{ $medico->nombre_apellido }}</option>
            @endforeach
            </select>
          </div>
        </div>
        <div class="form-group mt-3 mt-md-0">
          <label for="id_servicio">Servicio:</label>
          <select name="id_servicios" id="id_servicios" class="form-control">
          @foreach ($servicios as $servicio)
            <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
          @endforeach
          </select>
        </div>
        <div class="form-groupmt mt-3">
          <input class="form-control" type="date" name="fecha" rows="5" placeholder="Fecha" required>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center">
          <button type="submit">Realizar reservacion</button>
        </div>
      </form>

    </div>
  </section><!-- End Contact Section -->


  <!-- Vendor JS Files -->
  <script src="assetuser/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assetuser/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assetuser/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assetuser/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assetuser/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assetuser/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assetuser/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assetuser/js/main.js"></script>

</body>

</html>
