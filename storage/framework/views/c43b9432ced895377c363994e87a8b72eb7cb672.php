<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категорія</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Головна</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="<?php echo e(route('product.edit',$product->id)); ?>" class="btn btn-primary">Редагувати</a>
                            </div>
                            <form action="<?php echo e(route('product.delete',$product->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <input type="submit" class="btn btn-danger" value="Видалити">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td><?php echo e($product->id); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Назва</td>
                                        <td><?php echo e($product->title); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ціна</td>
                                        <td><?php echo e($product->price); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Стара ціна</td>
                                        <td><?php echo e($product->old_price); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Кількість</td>
                                        <td><?php echo e($product->count); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Категорія</td>
                                        <td><?php echo e($product->category->title); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/product/show.blade.php ENDPATH**/ ?>