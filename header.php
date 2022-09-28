<!DOCTYPE html>
<html  lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Trámites en Linea</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>application/public/images/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/public/vendor/chartist/css/chartist.min.css">
    <link href="<?php echo base_url(); ?>application/public/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>application/public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>application/public/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>application/public/css/style.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="<?php echo base_url(); ?>application/public/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/public/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/public/vendor/pickadate/themes/default.date.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Datatable -->
    <link href="<?php echo base_url(); ?>application/public/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="<?php echo base_url(); ?>application/public/images/logo1.jpg" alt="">
                <img class="logo-compact" src="<?php echo base_url(); ?>application/public/images/logo2.jpg" alt="">
                <img class="brand-title" src="<?php echo base_url(); ?>application/public/images/logo2.jpg" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Trámites
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown header-profile">
                                <a class="nav-link" role="button">
									<div class="header-info">
										<span >
                                        <a href="<?php echo base_url(); ?>Tramite/Perfil"><i class="flaticon-381-user-7"></i>  Perfil</a><br> 
                                        <a href="<?php echo base_url(); ?>Login/salir"><i class="flaticon-381-exit-1"></i> Salir</a>
                                    </span>											
									</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="<?php echo base_url(); ?>Tramite/" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-home-2"></i>
							<span class="nav-text">Inicio</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad-2"></i>
							<span class="nav-text">Atención de Trámites</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?php echo base_url(); ?>Tramite/crearTramite">Crear Nuevo Trámite</a></li>
							<li><a href="<?php echo base_url(); ?>Tramite/MisTramites">Mis Trámites</a></li>
						</ul>
                    </li>
                    <!--<li><a href="<?php echo base_url(); ?>Tramite/Documentos" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-folder-5"></i>
							<span class="nav-text">Documentos</span>
						</a>
					</li>-->
                    <li><a href="<?php echo base_url(); ?>Tramite/Preguntas" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-list-1"></i>
							<span class="nav-text">Preguntas Frecuentes</span>
						</a>
					</li>
                    <!--
                    <li><a href="<?php echo base_url(); ?>Tramite/Unidades" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-map-2"></i>
							<span class="nav-text">Unidades</span>
						</a>
					</li>-->
                    <li><a href="<?php echo base_url(); ?>Tramite/contacto" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-smartphone-2"></i>
							<span class="nav-text">Contacto</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-user-7"></i>
							<span class="nav-text">Perfil</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?php echo base_url(); ?>Tramite/InfoSolicitante">1.- Datos del Solicitante</a></li>
                            <li><a href="<?php echo base_url(); ?>Tramite/Domicilio">2.- Domicilio</a></li>
                            <li><a href="<?php echo base_url(); ?>Tramite/Documentos">3.-Documentos</a></li>
							<li><a href="<?php echo base_url(); ?>Tramite/Perfil">Datos de Acceso</a></li>
						</ul>
						
                    </li>
                    <li><a href="<?php echo base_url(); ?>Tramite/terminosCondiciones" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Terminos y Condiciones</span>
						</a>
					</li>
                    <li><a href="<?php echo base_url(); ?>Login/salir" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-exit-1"></i>
							<span class="nav-text">Salir</span>
						</a>
					</li>
                </ul>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->