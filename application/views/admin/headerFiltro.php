<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Yaydoo</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>application/assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<main class="cd-main-content">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">
                <img width="200" src="<?php echo base_url(); ?>application/assets/image/Yaydoo.gif">
            </a>
            <!-- Sidebar Toggle-->
            <button style="color: #000;" class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <h4 style="padding-top: 60px; margin-left: 10px;">Bienvenidx</h4>
                            <p style="margin-left: 10px;"><?php echo $this->session->userdata('email'); ?></p>
                            <a class="nav-link" href="<?php echo base_url(); ?>Admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Inicio
                            </a>
                            <div class="card">
							<div class="cd-filter">
			<form>

				<div class="cd-filter-block">
					<h4>Proveedores</h4>
                    <ul class="cd-filter-content cd-filters list">
                    <?php foreach($usuarios as $valUsers): ?>
                        <li>
							<input class="filter" data-filter=".check<?= $valUsers->id_usuario ?>" type="checkbox" id="check<?= $valUsers->id_usuario ?>">
			    			<label class="checkbox-label" for="check<?= $valUsers->id_usuario ?>"><?= $valUsers->email ?></label>
						</li> 
                    <?php endforeach; ?>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>
		</div> <!-- cd-filter -->
</div>
                            
                            <a class="nav-link" href="<?php echo base_url(); ?>Login/Salir">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-right-to-bracket"></i></div>
                                Salir
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
