<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <a href="">Регистрация</a>
    <a href="">Авторизация</a>
    <a href="">Главная</a>
    <a href="<?php echo e(route('addvideo')); ?>">Добавить видео</a>

    <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><a href="<?php echo e(route('videos', $ar->id)); ?>">Название:</a><?php echo e($ar->title); ?> <span>Описание:</span><?php echo e($ar->description); ?></p>
        <img src="<?php echo e('storage/image/' . $ar->imageSRC); ?>" alt="fgh" width="500px">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\Users\21039\Desktop\auth\auth\resources\views/main.blade.php ENDPATH**/ ?>