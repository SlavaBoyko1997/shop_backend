<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Користувач</h1>
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
                                <a href="<?php echo e(route('user.edit',$user->id)); ?>" class="btn btn-primary">Редагувати</a>
                            </div>
                            <form action="<?php echo e(route('user.delete',$user->id)); ?>" method="post">
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
                                        <td><?php echo e($user->id); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Імя</td>
                                        <td><?php echo e($user->name); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Фамілія</td>
                                        <td><?php echo e($user->surname); ?></td>
                                    </tr>
                                    <tr>
                                        <td>По батькові</td>
                                        <td><?php echo e($user->patronymic); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo e($user->email); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Вік</td>
                                        <td><?php echo e($user->age); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Гендер</td>
                                        <td><?php echo e($user->genderTitle); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Адрес</td>
                                        <td><?php echo e($user->address); ?></td>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/user/show.blade.php ENDPATH**/ ?>