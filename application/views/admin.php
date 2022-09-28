<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Trámites en Linea</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="<?php echo base_url(); ?>application/public/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
    .authincation-content {
    background: #fff;
    box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%);
    border-radius: 5px;
    color: #0d263d;
}  

.h-100 {
    background-image: url(./../application/public/images/122.jpg);
}  

    </style>
</head>

<body style="background-color: #0f253b;" class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img width="70%" src="<?php echo base_url(); ?>application/public/images/Logo_largo.jpg" alt=""></a>
									</div>
                                    
                                    <?php if ($this->session->userdata('error')): ?>
                                    <div class="alert alert-danger">
                                    <strong>¡Error!</strong>  <?=$this->session->flashdata('error')?>
                                    </div>
                                    <?php endif; ?>
                                    <form class="form-valide-with-icon" method="POST" action="<?php echo base_url() ?>Administrador/entrar">
                                        
                                        <div class="form-group">
                                            <label class="text-label">Correo: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                </div>
                                                <input type="text" class="form-control" id="val-username1" name="txtCorreo" placeholder="Escribe tu correo">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-label">Password: </label>
                                            <div class="input-group transparent-append">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input type="password" class="form-control" id="dz-password" name="txtPwd" placeholder="Escribe tu contraseña">
                                                
                                            </div>
                                        </div>
                                        <div style="text-align: center;" class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1 ">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Recordar mis credenciales</label>
												</div>
                                            </div>
                                        </div>
                                        
                                        <div class="text-center">
                                            <button name="btnAccesar" value="valid" type="submit" class="btn bg-primary text-white btn-block btn-lg">ENTRAR</button>
                                        </div>
                                    </form>
                                        </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>application/public/vendor/global/global.min.js"></script>
	<script src="<?php echo base_url(); ?>application/public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>application/public/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>application/public/js/deznav-init.js"></script>

</body>

</html>