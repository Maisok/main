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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <span class="text-2xl font-bold dark:text-white">Список всех категорий</span>
            <?php $__currentLoopData = $arrcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arrcatval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex">
                <p class="text-2xl"><?php echo e($arrcatval->name); ?></p>
                <form method="post" action="<?php echo e(route('deletecat', $arrcatval->id)); ?>" class="float-right">
                    <?php echo method_field('DELETE'); ?> <?php echo csrf_field(); ?> <input type="text" value="<?php echo e($arrcatval->id); ?>" name="id" hidden>
                    <button type="submit" class="ml-1.5 text-white bg-blue-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Удалить</button>
                </form>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <form method="POST" action="<?php echo e(route('admin.cat')); ?>">
                <?php echo csrf_field(); ?>
                <input type="text" placeholder="Название категории" name="namecat" required class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"> <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Добавить новую категорию</button>
            </form>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-sm mx-auto">
                    <div class="p-6 text-gray-900 dark:text-gray-100"> <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400"><a href="<?php echo e(route('videos', $ar->id)); ?>">Название: <?php echo e($ar->title); ?></a></p>
                        <span class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">Описание: <?php echo e($ar->description); ?></span>
                        <img src="<?php echo e('image/' . $ar->imageSRC); ?>" alt="fgh" width="500px">
                        <form method='post' action="<?php echo e(route('editvideo')); ?>">
                            <input type="text" value="<?php echo e($ar->id); ?>" hidden name="id_vid"> <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <select name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="none">Нет ограничений</option>
                                <option value="breach">Нарушение</option>
                                <option value="shadowBan">Теневой бан</option>
                                <option value="ban">Бан</option>
                            </select>
                            <button type="submit" class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Изменить</button>
                        </form> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
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
<?php endif; ?><?php /**PATH C:\Users\21038\Desktop\Новая папка\main\resources\views/admin.blade.php ENDPATH**/ ?>