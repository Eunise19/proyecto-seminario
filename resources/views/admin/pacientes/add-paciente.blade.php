<!DOCTYPE html>
<html lang="en">


<!-- add-patient24:06-->
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
                        <h4 class="page-title">Añadir Paciente</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for='name'>Nombre Completo <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="name" name="name" >
                                    </div>
                                </div> 
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for='alergia'>Alergia <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="alergia" name="alergia">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for='email'>Correo Electronico <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for='telefono'>Telefono <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="telefono" name="telefono">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="form-group ">
                                        <label for='fecha_nacimiento'>Fecha de nacimiento</label>
                                        <div class="cal-icon">
                                            <input type="datetime" class="form-control datetimepicker" id="fecha_nacimiento" name="fecha_nacimiento">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for='password'>Contraseña</label>
                                        <input class="form-control" type="password" id="password" name="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for='password'>Confirmar contraseña</label>
                                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                                    </div>
                                </div>
								
                              
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Crear paciente</button>
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
</body>


<!-- add-patient24:07-->
</html>
