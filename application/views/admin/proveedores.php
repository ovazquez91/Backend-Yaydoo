

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Inicio</h1>
<main style="padding-top: 60px;" class="cd-main-content">
		<section class="cd-gallery">
			<ul>
            <?php foreach($productos as $valProd): ?>
				<li class="mix check<?= $valProd->id_usuario ?>">
                    <div style="text-align: center;" class="card">
                    <img width="300" src="<?php echo base_url(); ?>application/assets/image/defaultImage.png" alt="Image 1">
                    <p style="font-size: 18px;"><b>Nombre Producto:<?= $valProd->nombre_producto ?></b></p>
                    <p><b>SKU:</b> <?= $valProd->sku ?></p>
                    <p><b>Precio:</b> $<?= $valProd->precio ?></p>
                    </div>
                </li>
                <?php endforeach; ?>    
			</ul>
			<div class="cd-fail-message">No hay resultados</div>
		</section> <!-- cd-gallery -->
	</main> <!-- cd-main-content -->
    </div>
                

 <script src="<?php echo base_url(); ?>application/assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url(); ?>application/assets/js/jquery.mixitup.min.js"></script>
<script src="<?php echo base_url(); ?>application/assets/js/main.js"></script> <!-- Resource jQuery -->
              