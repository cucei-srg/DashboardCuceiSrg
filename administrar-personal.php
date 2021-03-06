<?php
  require_once('centinela.php');
?>
<!DOCTYPE html>
<head>
	<title>CUCEI-SRG | Administración de Gráficas</title>
	<?php
    	include('header.php');
      ?>
<link rel="stylesheet" type="text/css" href="assets/css/administrar-personal.css">
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
	<div class="wrapper">
	<?php
      include("navbar.php");
    ?>
    <?php
      include("sidebar.php");
    ?>
    <div class="content-wrapper">
    	<section class="content-header">
    		<h1>
		        Administración de Personal
		        <small>Sistema de Reportes Generales</small>
      		</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="active">Personal</li>
			</ol>
    	</section>
    	<!-- END Content Header (Page header) -->
    	<!-- Contenedor principal -->
    	<section class="content">
            <ol class="breadcrumb" id="breadcrumbContent">
				<li><a href="dashboard-mantenimiento.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="active" id="liContent">Administrar Personal</li>
			</ol>
            <h1>¿Qué Desea Hacer?</h1>
            <h4>Seleccione la opción:</h4>
                <div class="row">
                    <div class="col-sm-6" id="divAltaPersonal" data-toggle="modal" data-target="#modalAltaPersonal">
                        <h2>Dar de Alta Nuevo Personal</h2>
                    </div>
                    <div class="col-sm-6" id="divBajaPersonal" data-toggle="modal" data-target="#modalBajaPersonal">
                        <h2>Dar de Baja Personal</h2>
                    </div>
                    <br/>
                    <div class="col-sm-12" id="divHabilitarPersonal" data-toggle="modal" data-target="#modalHabilitarPersonal">
                        <h2>Habilitar Personal dado de Baja</h2>
                    </div>
                    <div class="col-sm-12" id="divAsignarAdministrador" data-toggle="modal" data-target="#modalAsignarAdministrador">
                        <h2>Asignar Administradores</h2>
                    </div>
                    <div class="col-sm-6" id="divAsignarRol">
                        <h2>Asignar Roles de Personal</h2>
                    </div>
                    <div class="col-sm-6" id="divConsultaDatosP" data-toggle="modal" data-target="#modalConsultarUsuarioActual" onclick="datosPersonales()">
                        <h2>Consultar Mis Datos Personales</h2>
                    </div>
                </div>
    	</section>
    </div>
        <!-- Modal Alta Personal -->
        <div id="modalAltaPersonal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" id="headerModalAltaPersonal">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" id="modalBodyAltaPersonal">
                <div class="register-box">
                    <div class="register-logo">
                        <b>Admin</b>CUCEI-SRG
                    </div>
                <div class="register-box-body" id="registerboxAltaPersonal">
                    <div class="login-logo">
                        Registro de Personal
                    </div>
                    <hr id="hrAltaPersonal">
                    <form autocomplete="off">
                        <div class="form-group">
                            <label for="txtCorreo" id="txtCorreoAltaPersonal">Correo electrónico:</label>
                            </i><input type="email" class="form-control" placeholder="correo@cucei.udg.mx" id="txtCorreo" required>
                        </div>
                        <div class="form-group">
                            <label for="txtPassword" id="txtPasswordAltaPersonal">Contraseña:</label>
                            </i><input type="password" class="form-control" placeholder="Escribe tu password" id="txtPassword" required>
                            <p id="pNotaPasswordAltaPersonal">La contraseña debe contener al menos 6 carácteres.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="button" id="btnAltaPersonal" class="btn btn-primary btn-block btn-flat" onclick="altaPersonal();">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <!-- Modal Baja Personal -->
 <div id="modalBajaPersonal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" id="headerBajaPersonal">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" id="bodyBajaPersonal">
                <div class="register-box">
                    <div class="register-logo">
                        <b>Admin</b>CUCEI-SRG
                    </div>
                <div class="register-box-body" id="registerboxBajaPersonal">
                    <div class="login-logo">
                        Baja de Personal
                    </div>
                    <hr id="hrBajaPersonal">
                    <form autocomplete="off" id="formulario">
                        <h5 id="hAlertaBajaPersonal">Cuidado: El usuario dado de baja NO podrá acceder al Sistema hasta que sea habilitado nuevamente.</h5>
                        <div class="form-group">
                            <label for="txtCorreoBaja" id="txtCorreoBaja">Ingresa el Correo Electrónico a dar de Baja</label>
                            <input type="email" class="form-control" placeholder="correo@cucei.udg.mx" id="txtCorreoBaja" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="button" id="btnBajaPersonal" class="btn btn-primary btn-block btn-flat" onclick="bajaPersonal();">Dar de Baja</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Habilitar Personal -->
 <div id="modalHabilitarPersonal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" style="background-color: #1a237e;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="background-color: #cfd8dc;">
                <div class="register-box">
                    <div class="register-logo">
                        <b>Admin</b>CUCEI-SRG
                    </div>
                <div class="register-box-body" style="background-color: #eceff1;">
                    <div class="login-logo">
                        Habilitar Personal
                    </div>
                    <hr style="background-color: gray">
                    <form autocomplete="off" id="formulario">
                        <div class="form-group">
                            <label for="txtCorreoHabilitar" style="color: blue;">Ingresa el Correo Electrónico a habilitar</label>
                            <input type="email" class="form-control" placeholder="correo@cucei.udg.mx" id="txtCorreoHabilitar" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary btn-block btn-flat" onclick="habilitarPersonal();" style="background-color: #6200ea; color: white;">Habilitar Personal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Asignar Administrador -->
 <div id="modalAsignarAdministrador" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" style="background-color: #1b5e20;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="background-color: #cfd8dc;">
                <div class="register-box">
                    <div class="register-logo">
                        <b>Admin</b>CUCEI-SRG
                    </div>
                <div class="register-box-body" style="background-color: #eceff1;">
                    <div class="login-logo">
                        Asignar Administrador
                    </div>
                    <hr style="background-color: gray">
                    <form autocomplete="off" id="formulario">
                        <div class="form-group">
                            <label for="txtCorreoHabilitar" style="color: blue;">Ingresa el Correo Electrónico</label>
                            <input type="email" class="form-control" placeholder="correo@cucei.udg.mx" id="txtCorreoAdmin" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary btn-block btn-flat" onclick="asignarAdministrador();" style="background-color: #00c853; color: black;">Asignar Administrador</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<span id="modalPersonal"></span>
<?php
    include("control-sidebar.php");
?>
</div>
<?php
    include('footer.php');
?>
<script type="text/javascript" src="assets/js/administrar-personal.js"></script>
</body>
</html>
