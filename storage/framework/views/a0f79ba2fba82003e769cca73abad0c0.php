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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"> <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <div> <video width="800" controls="controls" class='rounded-xl'>
                            <source src="<?php echo e(asset('video') . '/' . $ar->videoSRC); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        </video>
                        <div class="flex mt-11">
                            <div class="">
                                <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400"><a><?php echo e($ar->title); ?></a>
                                <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400"><span>Описание:</span><?php echo e($ar->description); ?></p>
                                <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">Пользователь:<?php echo e($name); ?></p>
                                <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">Категория:<?php echo e($category_name); ?></p>
                                <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400"><?php echo e($time); ?></p>
                            </div>
                            <div class="ml-9">
                                <?php if(Auth::check()): ?>
                                <form method="post" action="<?php echo e(route('like')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" value="<?php echo e($ar->id); ?>" name="id_like" hidden>
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Лайк</button> <span><?php echo e($likes); ?></span>
                                </form>
                                <form method='post' action="<?php echo e(route('dislike')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" value="<?php echo e($ar->id); ?>" hidden name="id_dislike">
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Дизлайк</button> <span><?php echo e($dislike); ?></span>
                                </form>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <form method='post' action="<?php echo e(route('comments')); ?>" class="flex flex-col">
                                <?php echo csrf_field(); ?>
                                <input type="text" value="<?php echo e($ar->id); ?>" hidden name="video_id">
                                <span class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">Оставьте комментарий</span>
                                <textarea name="text" required maxlength="255" class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50 mt-5"></textarea> <button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-1/4 mt-5">Добавить</button>
                            </form>
                        </div>
                        <?php endif; ?>
                        <div class="mb-24">
                            <span class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">Комментарии к видео</span>
                            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <div class="w-[800px] text-1xl break-words">
                                    <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400 mt-6">
                                        <?php echo e($comment->name); ?>:<?php echo e($comment->text); ?>

                                    </p>
                                </div>
                                <?php if(Auth::check()): ?>
                                <?php if($comment->user_id == Auth::user()->id): ?>
                                <div class="inline-flex">
                                    <div>
                                        <form method="post" action="<?php echo e(route('editcomment')); ?>">
                                            <?php echo csrf_field(); ?> <input type="text" value="<?php echo e($comment->id); ?>" name="editid" hidden>
                                            <input type="text" value="<?php echo e($comment->text); ?>" name="editcom">
                                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Редактировать</button>
                                        </form>
                                        <form action="<?php echo e(route('deletecomment')); ?>" method="post">
                                            <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                            <input type="text" value="<?php echo e($comment->id); ?>" name="editid" hidden>
                                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Удалить</button>
                                        </form>
                                    </div>
                                </div>
                                <?php endif; ?> <?php endif; ?>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?><?php /**PATH C:\Users\21038\Desktop\Новая папка\main\resources\views/videos.blade.php ENDPATH**/ ?>