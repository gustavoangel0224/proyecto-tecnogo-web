<?php $__env->startSection('titulo', 'Productos'); ?>

<?php $__env->startSection("contenido"); ?>

<section style="padding-top: 100px;">
    <div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filtrar
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Buscar
					</div>
				</div>

				<!-- buscar productos -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<form class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="s" placeholder="Buscar...">
					</form>
				</div>

				<!-- Filtro de productos-->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">

                        <div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Categorias
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Todas
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Tecnología
									</a>
								</li>
							</ul>
						</div>


						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Ordenar por
							</div>

							<ul>


								<li class="p-b-6">
									<a href="/productos/menor-mayor" class="filter-link stext-106 trans-04">
										Precio: Menor a Mayor
									</a>
								</li>

								<li class="p-b-6">
									<a href="/productos/mayor-menor" class="filter-link stext-106 trans-04">
										Precio: Mayor a Menor
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

            <div class="row">
              <!--Con el forech recorre el arreglo de los productos-->
          <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img  src="<?php echo e($producto->imagen); ?>" alt="<?php echo e($producto->nombre); ?>" >

                            <a href="/<?php echo e($producto->SKU); ?>/<?php echo e($producto->id); ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 color-verProducto " >
                                Ver producto
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="/<?php echo e($producto->SKU); ?>/<?php echo e($producto->id); ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                   <?php echo e($producto->nombre); ?>

                                </a>

                                <span class="stext-105 cl3">
                                   $<?php echo e(number_format($producto->precioVenta, 2)); ?>

                                </span>
                            </div>
                        </div>
                    </div>
                </div>

             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <div class="col-sm-12">
                 <?php echo e($productos->links()); ?>

             </div>
            </div>

		</div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/jetro/gomarket1/resources/views/website/productos.blade.php */ ?>