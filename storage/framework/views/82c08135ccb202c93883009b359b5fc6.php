<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Aplicación</title>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <?php echo $__env->yieldContent('styles'); ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <ul class="navbar-nav ml-auto">
                </ul>
            </div>
        </nav>

        <div class="container mt-4">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <?php echo $__env->yieldContent('scripts'); ?>
        
    </body>
</html>
<?php /**PATH /Users/samantharamirez/Superheroes/resources/views/layouts/app.blade.php ENDPATH**/ ?>