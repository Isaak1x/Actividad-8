<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 style="margin-bottom: 35px;">Editar Superheroe</h1>
        <form action="<?php echo e(route('superheroes.update', $superhero)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="nombre_superheroe">Nombre del superheroe</label>
                <input type="text" class="form-control" id="nombre_superheroe" name="nombre_superheroe" value="<?php echo e($superhero->nombre_superheroe); ?>" required>
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="nombre_real">Nombre real del superheroe</label>
                <input type="text" class="form-control" id="nombre_real" name="nombre_real" value="<?php echo e($superhero->nombre_real); ?>" required>
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="foto_url">Foto (Agrega la URL)</label>
                <input type="text" class="form-control" id="foto_url" name="foto_url" value="<?php echo e($superhero->foto_url); ?>" required>
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="info">Descripcion</label>
                <textarea class="form-control" id="info" name="info"><?php echo e($superhero->info); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <button type="button" onclick="window.location='<?php echo e(route('superheroes.index')); ?>'" class="btn btn-secondary">Volver</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/samantharamirez/Superheroes/resources/views/superheroes/edit.blade.php ENDPATH**/ ?>