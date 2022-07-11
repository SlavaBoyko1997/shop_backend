<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавити користувача</h1>
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
                <form action="<?php echo e(route('user.store')); ?> " method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="email" value="<?php echo e(old('email')); ?>" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" value="<?php echo e(old('password')); ?>" name="password" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="form-group">
                        <input type="password" value="<?php echo e(old('password_confirmation')); ?>" name="password_confirmation" class="form-control" placeholder="Підтвердження пароля">
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo e(old('name')); ?>" name="name" class="form-control" placeholder="Імя">
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo e(old('surname')); ?>" name="surname" class="form-control" placeholder="Фамілія">
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo e(old('patronymic')); ?>" name="patronymic" class="form-control" placeholder="По батькові">
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo e(old('age')); ?>" name="age" class="form-control" placeholder="Вік">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Гендер</option>
                            <option <?php echo e(old('gender') == 1 ? 'selected': ''); ?> value="1">Чоловік</option>
                            <option <?php echo e(old('gender') == 2 ? 'selected': ''); ?> value="2">Жінка</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo e(old('address')); ?>" name="address" class="form-control" placeholder="Авдрес">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавити">
                    </div>
                </form>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/user/create.blade.php ENDPATH**/ ?>