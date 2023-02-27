<?php $__env->startSection('home','Crear Usuarios'); ?>

<?php $__env->startSection('contenido'); ?>

<div class="card text-bg-dark mb-3">
    <h5 class="card-header text-center border-4 border-light">Eliminar</h5>
    <div class="card-body">
      <h5 class="card-title text-center">Eliminar Usuario</h5>
        <p class="card-text">
            
                <table class="table table-sm table-bordered table-dark table-hover border-3 border-light">
                    <thead>
                        <th>ELIMINAR</th>
                    <th>FECHA</th>
                    <th>EMAIL</th>
                    <th>TELEFONO</th>
                    <th>NOMBRE</th>
                    <th>ID</th>
                    </thead>
                    <tbody>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                    </tbody>
                </table>
                <hr>
                <form action="">
                    <a name="" id="" class="btn btn-info" href="<?php echo e(route('personas.index')); ?>" role="button">Cancelar</a>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </form>
            
        </p>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/eliminar.blade.php ENDPATH**/ ?>