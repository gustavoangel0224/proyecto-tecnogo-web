<?php $__env->startSection('titulo', 'Mis pedidos'); ?>

<?php $__env->startSection("contenido"); ?>

<div class="container bloque-detalle">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-sm-12 titulo-detalle" >
								<h5><span class=""></span> Mis pedidos</h5>
							</div>
                           
                           <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-3">    
                                <h4 class="product-name"><strong>Id Pedido</strong></h4>
                                   </div>
                                    <div class="col-sm-3">    
                                <h4 class="product-name"><strong>Fecha</strong></h4>
                                   </div>
                               <div class="col-sm-3">    
                                <h4 class="product-name"><strong>Estatus</strong></h4>
                                   </div>
                               <div class="col-sm-3">    
                                <h4 class="product-name"><strong>Total</strong></h4>
                                   </div>

                                </div>
							</div>
						</div>
					</div>
				</div>
				
				<?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="panel-body">

					<a href="/detalle/Pedido/<?php echo e($pedido->id); ?>" class="row">
                        					
						<div class="col-sm-3">    
							<h4><small><?php echo e($pedido->id); ?></small></h4>
						</div>
						
						<div class="col-sm-3">
							<h4><small class="fecha"><?php echo e($pedido->domicilio->fechaEntrega); ?></small></h4>
						</div>
						<div class="col-sm-3">
							<h4><small class="fecha"><?php echo e($pedido->estado); ?></small></h4>
						</div>
						<div class="col-sm-3">
							<h4><small class="fecha">$<?php echo e(number_format($pedido->total, 2)); ?></small></h4>
						</div>
					
					</a>
                   
                    <hr>	
                    
                </div>	
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>				
            </div>	
		</div>
	</div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/jetro/gomarket1/resources/views/website/misPedidos.blade.php */ ?>