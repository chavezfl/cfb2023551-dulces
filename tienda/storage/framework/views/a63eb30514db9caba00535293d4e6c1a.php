<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Pedidos</h1>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="order">
                <h2>Pedido #<?php echo e($order->id); ?> - Total: $<?php echo e($order->total); ?></h2>
                <?php $__currentLoopData = $order->orderProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p>Producto: <?php echo e($orderProduct->product->name); ?></p>
                    <p>Cantidad: <?php echo e($orderProduct->quantity); ?></p>
                    <p>Precio: $<?php echo e($orderProduct->price); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tienda\resources\views/order/index.blade.php ENDPATH**/ ?>