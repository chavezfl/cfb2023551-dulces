<?php $__env->startSection('template_title'); ?>
    Create Order
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <span id="card_title">
                            <?php echo e(__('Nuevo Pedido')); ?>

                        </span>
                    </div>

                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success m-4">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <form action="<?php echo e(route('order.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($product->name); ?></td>
                                            <td>
                                                <input type="number" name="products[<?php echo e($product->id); ?>][quantity]" value="1" min="1" class="form-control">
                                                <input type="hidden" name="products[<?php echo e($product->id); ?>][id]" value="<?php echo e($product->id); ?>">
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="float-right">
                                <button type="submit" class="btn btn-primary"><?php echo e(__('Hacer Pedido')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tienda\resources\views/order/create.blade.php ENDPATH**/ ?>