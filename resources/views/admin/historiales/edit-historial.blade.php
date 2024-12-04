<!DOCTYPE html>
<html lang="en">


<!-- edit-appointment24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assetsadmin/img/favicon.ico">
    <title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/style.css">
    <!--[if lt IE 9]>
		<script src="assetsadmin/js/html5shiv.min.js"></script>
		<script src="assetsadmin/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        @include('admin.sidebar')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Editar Cita</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST" action="{{ route('historiales.update', $historial) }}">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
									<div class="form-group">
										<label for="id_paciente">Nombre Paciente</label>
                                        <select name="id_pacientes" id="id_pacientes" class="form-control">
                                            @foreach ($pacientes as $paciente)
                                                <option value="{{ $paciente->id }}" {{ $historial->id_pacientes == $paciente->id ? 'selected' : '' }}>
                                                    {{ $paciente->name }}
                                                </option>
                                            @endforeach
                                        </select>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="id_medico">Médico:</label>
                                        <select name="id_medicos" id="id_medicos" class="form-control">
                                            @foreach ($medicos as $medico)
                                                <option value="{{ $medico->id }}" {{ $historial->id_medicos == $medico->id ? 'selected' : '' }}>
                                                    {{ $medico->nombre_apellido }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="id_servicio">Servicio:</label>
                                        <select name="id_servicios" id="id_servicios" class="form-control">
                                            @foreach ($servicios as $servicio)
                                                <option value="{{ $servicio->id }}" {{ $historial->id_servicios == $servicio->id ? 'selected' : '' }}>
                                                    {{ $servicio->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripcion</label>
                                        <textarea cols="30" name="descripcion" id="descripcion" rows="4" class="form-control">{{ old('descripcion', $historial->descripcion) }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <div class="">
                                            <input type="date" name="fecha" id="fecha" class="" value="{{ old('fecha', $historial->fecha) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assetsadmin/js/jquery-3.2.1.min.js"></script>
	<script src="assetsadmin/js/popper.min.js"></script>
    <script src="assetsadmin/js/bootstrap.min.js"></script>
    <script src="assetsadmin/js/jquery.slimscroll.js"></script>
    <script src="assetsadmin/js/select2.min.js"></script>
	<script src="assetsadmin/js/moment.min.js"></script>
	<script src="assetsadmin/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assetsadmin/js/app.js"></script>
		<script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });
     </script>
</body>


<!-- edit-appointment24:07-->
</html>
