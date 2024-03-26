<?php $__env->startSection('content'); ?>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 15px; /* Tamaño de fuente más pequeño */
        }

        .card-header {
            border-radius: 15px 15px 0 0;
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 20px; /* Tamaño de fuente más grande para el encabezado */
            padding: 5px 0; /* Añadir espacio alrededor del encabezado */
        }

        .card-body {
            padding: 50px; 
            text-align: center; 
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
            margin-bottom: 30px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
        }

        .btn {
            font-size: 1rem;
            margin-right: 10px;
            border-radius: 15px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .img-fluid {
            max-width: 300px; /* Reducir el tamaño máximo de la imagen */
            border-radius: 40%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 my-auto"> 
                <div class="card">
                    <div class="card-header">
                        <h1><?php echo e($superhero->nombre_superheroe); ?></h1>
                    </div>
                    <div class="card-body text-center"> 
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo e($superhero->foto_url); ?>" alt="<?php echo e($superhero->nombre_superheroe); ?>" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h4 class="card-title">Nombre Real:</h4>
                                <p class="card-text"><?php echo e($superhero->nombre_real); ?></p>
                                <h4 class="card-title">Descripción:</h4>
                                <p class="card-text"><?php echo e($superhero->info); ?></p>
                                <div class="btn-container">
                                    <button onclick="window.location='<?php echo e(route('superheroes.edit', $superhero)); ?>'" class="btn btn-primary">Editar</button>
                                    <form action="<?php echo e(route('superheroes.destroy', $superhero)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro de que quieres eliminar este superhéroe?')">Eliminar</button>
                                    </form>
                                    <button onclick="window.location='<?php echo e(route('superheroes.index')); ?>'" class="btn btn-secondary">Volver</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/samantharamirez/Superheroes/resources/views/superheroes/show.blade.php ENDPATH**/ ?>