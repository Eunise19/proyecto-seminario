<!DOCTYPE html>
<html lang="en">


<!-- add-department24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assetsadmin/img/favicon.ico">
    <title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/style.css">
    <!--[if lt IE 9]>
		<script src="assetsadmin/js/html5shiv.min.js"></script>
		<script src="assetsadmin/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="assetsadmin/img/logo.png" width="35" height="35" alt=""> <span>Odontochichas</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="assetsadmin/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>{{auth()->user()->name}}</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">Mi perfil</a>
						<a class="dropdown-item" href="{{ route('login.destroy')}}">Salir</a>
					</div>
                </li>
            </ul>
            
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu</li>
                        <li class="active">
                            <a href="{{ route('admin.index')}}"><i class="fa fa-dashboard"></i> <span>Panel de administracion</span></a>
                        </li>
						<li>
                            <a href="{{ route('admin.doctores.doctors')}}"><i class="fa fa-user-md"></i> <span>Doctores</span></a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pacientes.pacients')}}"><i class="fa fa-wheelchair"></i> <span>Pacientes</span></a>
                        </li>
    
                        <li>
                            <a href="{{ route('admin.servicios.service')}}"><i class="fa fa-hospital-o"></i> <span>Servicios</span></a>
                        </li>
						
                        </li>
					
						<li class="submenu">
							<a href="{{ route('admin.citas.cita')}}"><i class="fa fa-flag-o"></i> <span> Reportes </span> <span></span></a>
							
						</li>
                     
                        <li>
                            <a href="{{ route('admin.citas.cita')}}"><i class="fa fa-edit"></i> <span> Citas</span> <span></span></a>
                            
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Agregar servicios</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            
							<div class="form-group">
								<label>Nombre Servicio</label>
								<input class="form-control" type="text">
							</div>
                            <div class="form-group">
                                <label>Descripcion</label>
                                <textarea cols="30" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
								<label>Costo</label>
								<input class="form-control" type="text">
							</div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Crear servicio</button>
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
    <script src="assetsadmin/js/app.js"></script>
</body>


<!-- add-department24:07-->
</html>
