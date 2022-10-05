<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="<?php echo base_url(); ?>application/assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div style="padding-top: 100px;" class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div style="text-align: center;" class="card-header">
                                    
                                    <img width="200" src="<?php echo base_url(); ?>application/assets/image/Yaydoo.gif">
                                    
                                    
                                        <h3 class="text-center font-weight-light my-4">Ingresa tu correo y contraseña:</h3>
                                        <?php if ($this->session->userdata('error')): ?>
                                    <div class="alert alert-danger">
                                    <strong>¡Error!</strong>  <?=$this->session->flashdata('error')?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if ($this->session->userdata('aceptado')): ?>
                                    <div class="alert alert-success">
                                    <strong>¡Muy Bien!</strong>  <?=$this->session->flashdata('aceptado')?>
                                    </div>
                                    <?php endif; ?>
                                    </div>
                                        
                                    <div class="card-body">
                                        <form method="post" action="<?php echo base_url(); ?>Login/Entrar">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="ovazquez@yaydoo.com" />
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" name="btnAccesar" value="valid" class="btn btn-primary">Envíar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a onclick="crearUsuario();"  style="font-size: 20px">¿Necesitas crear una cuenta?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- Large modal -->
        <div class="modal fade crearUsuario" id="crearUsuario" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Crear Proveedores</h5>
                                                </div>
                                                <div class="modal-body">
                                                <form method="post" action="<?php echo base_url(); ?>Registro/registroVendedor">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="ovazquez@yaydoo.com" />
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="val-password" name="texto_password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="val-confirm-password" name="texto_password2" type="password" placeholder="Password" />
                                                <label for="inputPassword">Confirmación Password</label>
                                            </div>
                                            <div id="passok1" name="passok" class="alert alert-success solid alert-dismissible fade show">
									   <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
									   <strong>Correcto!</strong> Las contraseñas son iguales.
                                       </div>
                                        <div id="passnot1" name="passnot" class="alert alert-danger alert-dismissible fade show">
									    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
									    <strong>Error!</strong> Las contraseñas no coiciden.
								        </div> 
                                            
                                                </div>
                                                <div class="modal-footer">
                                                
                                                <button type="submit" name="btnGuardarVendedor" value="Aceptar" class="btn btn-primary">Envíar</button>
                                            
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

    </body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>application/assets/js/scripts.js"></script>

<script>
$(document).ready(function() {
	//variables
    var btn = $('[name=btnGuardarVendedor]');
	var pass1 = $('[name=texto_password]');
	var pass2 = $('[name=texto_password2]');
    var mensaje1 = $('[name=passok]');
	var mensaje2 = $('[name=passnot]');
	
    mensaje1.hide();
    mensaje2.hide();
	//ejecuto la función al soltar la tecla
	pass2.keyup(function(){   

    var valor1 = pass1.val();
	var valor2 = pass2.val();
    
	
	if(valor1 != valor2){
        mensaje2.show();
        mensaje1.hide();
	}
	if(valor1.length==0 || valor1==""){
        mensaje2.show();
        mensaje1.hide();
	}
	if(valor1.length!=0 && valor1==valor2){
       mensaje1.show();
       mensaje2.hide();
	}
	
	});

});
</script>
<script>
    function crearUsuario() {
    $('#crearUsuario').modal('show');
    }
</script>