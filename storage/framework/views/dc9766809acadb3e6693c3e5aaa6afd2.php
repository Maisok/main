<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="mt-12">
        <h2 class="text-4xl font-extrabold dark:text-white text-center mt-12">Редактирование</h2>
        <div class="flex items-center">

            <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="">
                <p>Канал:<?php echo e($name); ?></p>

                <video width="800" controls="controls">
                    <source src="<?php echo e(asset('storage/video') . '/' . $ar->videoSRC); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                </video>
                <p><a>Название:</a><?php echo e($ar->title); ?></p>
                <p><span>Описание:</span><?php echo e($ar->description); ?></p>
                <p>Категория:<?php echo e($category_name); ?></p>
                <p>Дата публикации:<?php echo e($ar->created_at); ?></p>
                

                <?php if(Auth::check()): ?>
                <span>Лайки</span>
                <span><?php echo e($likes); ?></span>
                <span>Дизлайки</span>
                <span><?php echo e($dislike); ?></span>
                <?php endif; ?>
            </div>
            <div class="mt-12">
                <p>Изменение данных</p>

                <form action="<?php echo e('myvid' . $ar->id); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="text" value="<?php echo e($ar->id); ?>" hidden name="id">
                    <p>Название</p>
                    <input type="text" name="name" placeholder="Название" required maxlength="255" value="<?php echo e($ar->title); ?>">
                    <p>Описание</p>
                    <input type="text" name="desc" placeholder="Описание" maxlength="255" value="<?php echo e($ar->description); ?>">
                    <p>Файл видео</p>
                    <input type="file" name="vid" required>
                    <p>Файл превью</p>
                    <input type="file" name="img" required>


                    <p>Выберите категорию</p>
                    <select name="category">
                        <?php $__currentLoopData = $catarr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <br>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Обновить</button>
                </form>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\21038\Desktop\Новая папка\main\resources\views/myvid.blade.php ENDPATH**/ ?>