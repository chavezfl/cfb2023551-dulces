<?php $__env->startSection('template_title'); ?>
    <?php echo e($product->name ?? __('Show') . " " . __('Product')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-light" style="background-color: #032830; display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Ver')); ?> Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-outline-light btn-md" href="<?php echo e(route('product.index')); ?>"> <?php echo e(__('Atrás')); ?></a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-md-4 mb20">
                            <strong>Nombre:</strong>
                            <?php echo e($product->name); ?>

                        </div>
                        <div class="form-group mb-md-4 mb20">
                            <strong>Descripción:</strong>
                            <?php echo e($product->description); ?>

                        </div>
                        <div class="form-group mb-md-4 mb20">
                            <strong>Imagen:</strong>
                            <?php echo e($product->image); ?>

                        </div>
                        <div class="form-group mb-md-4 mb20">
                            <strong>Precio:</strong>
                            <?php echo e($product->price); ?>

                        </div>
                        <div class="form-group mb-md-4 mb20">
                            <strong>Stock:</strong>
                            <?php echo e($product->stock); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tienda\resources\views/product/show.blade.php ENDPATH**/ ?>