<?php $__env->startSection('template_title'); ?>
    Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-sm-12">
                <div class="card" >
                    <div class="card-header text-light" style="background-color: #032830">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Productos')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('product.create')); ?>" class="btn btn-outline-light btn-md float-right"  data-placement="left">
                                  <?php echo e(__('Nuevo')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success m-4">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Nombre</th>
										<th>Descripción</th>
										<th>Imagen</th>
										<th>Precio</th>
										<th>Stock</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

											<td><?php echo e($product->name); ?></td>
											<td><?php echo e($product->description); ?></td>
											<td><?php echo e($product->image); ?></td>
											<td><?php echo e($product->price); ?></td>
											<td><?php echo e($product->stock); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('product.destroy',$product->id)); ?>" method="POST">
                                                    <a class="btn btn-md btn-outline-info " href="<?php echo e(route('product.show',$product->id)); ?>"><i class="fa fa-fw fa-eye"></i> <?php echo e(__('Ver')); ?></a>
                                                    <a class="btn btn-md btn-outline-primary" href="<?php echo e(route('product.edit',$product->id)); ?>"><i class="fa fa-fw fa-edit"></i> <?php echo e(__('Editar')); ?></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-outline-danger btn-md"><i class="fa fa-fw fa-trash"></i> <?php echo e(__('Borrar')); ?></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $products->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tienda\resources\views/product/index.blade.php ENDPATH**/ ?>