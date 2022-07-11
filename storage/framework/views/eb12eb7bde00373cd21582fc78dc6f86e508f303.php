<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагувати користувача</h1>
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
                <form action="<?php echo e(route('user.update',$user->id)); ?> " method="post">
                    <?php echo method_field('patch'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" value="<?php echo e($user->name ?? old('name')); ?>" name="name" class="form-control" placeholder="Імя">
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo e($user->surname ?? old('surname')); ?>" name="surname" class="form-control" placeholder="Імя">
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo e($user->patronymic ?? old('patronymic')); ?>" name="patronymic" class="form-control" placeholder="Фамілія">
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo e($user->age ?? old('age')); ?>" name="age" class="form-control" placeholder="Вік">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Гендер</option>
                            <option <?php echo e($user->gender == 1 || old('gender') == 1 ? 'selected': ''); ?> value="1">Чоловік</option>
                            <option <?php echo e($user->gender == 2 || old('gender') == 2 ? 'selected': ''); ?> value="2">Жінка</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo e($user->address ?? old('address')); ?>" name="address" class="form-control" placeholder="Авдрес">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Зберегти">
                    </div>
                </form>


            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/user/edit.blade.php ENDPATH**/ ?>