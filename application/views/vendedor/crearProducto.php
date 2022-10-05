<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Crear Productos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                            <div class="card-body">
                                <row>
                                    <div class="col-md-8">
                                        <!-- Aqui van alertas -->
                                    <?php if ($this->session->userdata('errorProducto')): ?>
                                    <div class="alert alert-danger">
                                    <strong>¡Error!</strong>  <?=$this->session->flashdata('errorProducto')?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if ($this->session->userdata('productoExitoso')): ?>
                                    <div class="alert alert-success">
                                    <strong>¡Muy Bien!</strong>  <?=$this->session->flashdata('productoExitoso')?>
                                    </div>
                                    <?php endif; ?>
                                    <!-- Aqui van alertas -->
                            <form method="post" action="<?php echo base_url(); ?>Vendedor/insertarProducto" onSubmit="return validarfor();">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="nombre_producto" name="nombre_producto" type="text"  />
                                                <label for="inputEmail">Nombre Producto</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="sku" name="sku" type="text"  />
                                                <label for="inputPassword">SKU</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="cantidad" name="cantidad" type="text"  />
                                                <label for="inputCantidad">Cantidad</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="precio" name="precio" type="text"  />
                                                <label for="inputPassword">Precio</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" name="btnGuardarProd" value="Aceptar" class="btn btn-primary">Guardar Producto</button>
                                            </div>
                                        </form>
                                    </div>
                                </row>
                            </div>
                    </div>
                </main>
                <script src="<?php echo base_url(); ?>application/assets/js/jquery-2.1.1.js"></script>
                <script>
function validarfor(){

var nombre_producto = document.getElementById("nombre_producto").value; 
var sku = document.getElementsByName("sku")[0].value;
var cantidad = document.getElementsByName("cantidad")[0].value;
var precio = document.getElementsByName("precio")[0].value;

if ((nombre_producto == "") || (sku == "") || (cantidad == "") || (precio == "")){  //COMPRUEBA CAMPOS VACIOS
    alert("Los campos no pueden quedar vacios");
    return false;
}

}
</script>  