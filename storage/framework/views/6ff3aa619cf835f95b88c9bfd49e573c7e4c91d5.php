<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагувати товар</h1>
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
                <form action="<?php echo e(route('product.update',$product->id)); ?> " method="post">
                    <?php echo method_field('patch'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Товар" value="<?php echo e($product->title); ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Опис" value="<?php echo e($product->description); ?>">
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Контент"><?php echo e($product->content); ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="Ціна" value="<?php echo e($product->price); ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="old_price" class="form-control" placeholder="Стара ціна" value="<?php echo e($product->old_price); ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="count" class="form-control" placeholder="Кількість на складі" value="<?php echo e($product->count); ?>">
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Вибнріть фото</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <select name="category_id" class="form-control select2" style="width: 100%;">
                            <option selected="selected" disabled>Виберіть категорію</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e($product->category->title == $category->title ? 'selected':''); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/product/edit.blade.php ENDPATH**/ ?>