<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Productos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">En esta sección puedes ver todos los productos que se han creado.</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="<?php echo base_url(); ?>Vendedor/CrearProducto" style="width: 100; height: 40px; margin: 20px; font-size: 15px;" class="btn btn-primary"><b>Crear Producto</b></a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nombre Producto</th>
                                            <th>SKU</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Nombre Producto</th>
                                            <th>SKU</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                            <?php foreach($productos as $value): ?>
                                            <tr> 
                                            <td><?=$value->nombre_producto ?></td>
                                            <td><?=$value->sku ?></td>
                                            <td><?=$value->cantidad ?></td>
                                            <td><?=$value->precio ?></td>
                                            </tr> 
                                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

              