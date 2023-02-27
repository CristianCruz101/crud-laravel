<?php $__env->startSection('home','Inicio'); ?>



<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="card text-bg-dark mb-3">
        <h5 class="card-header text-center border-5 border-light"> <i class="bi bi-people-fill"></i> Usuarios</h5>
        
        <div class="card-body ">
            <div class="row">
                <div class="col-sm-12">
                    <?php if($mensaje = Session::get('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e($mensaje); ?>

                      </div>

                    <?php endif; ?>
                </div>
            </div>
          <h5 class="card-title text-center border-4 border-light"> <i class="bi bi-people"></i> Lista de Usuarios</h5>
          <hr class="border border-light border-2 opacity-100">

            <a name="" id="" class="btn btn-primary" href="<?php echo e(route("personas.create")); ?>" role="button">
                <i class="bi bi-person-plus-fill"></i> Agregar Usuario</a>
          <div class="table table-responsive">
            <br>
            
            
            <table class="table table-sm table-bordered table-dark table-hover border-3 border-light">
                <thead>
                    <th> <i class="bi bi-trash"></i> ELIMINAR</th>
                    <th> <i class="bi bi-pencil"></i> Editar</th>
                    <th> <i class="bi bi-calendar3"></i> FECHA</th>
                    <th> <i class="bi bi-envelope-fill"></i> EMAIL</th>
                    <th> <i class="bi bi-telephone-fill"></i>  TELEFONO  </th>
                    <th> <i class="bi bi-person-vcard-fill"></i> NOMBRE</th>
                    <th> <i class="bi bi-list-ol"></i> ID</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><a name="" id="" class="btn btn-danger" href="<?php echo e(route("personas.show")); ?>" role="button"> <i class="bi bi-person-x"></i> Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="<?php echo e(route("personas.edit")); ?>" role="button"> <i class="bi bi-pencil-square"></i>Editar</a></td>
                            <td><?php echo e($items->created_at); ?></td>
                            <td><?php echo e($items->usu_email); ?></td>
                            <td><?php echo e($items->usu_telefono); ?></td>
                            <td><?php echo e($items->usu_nombre); ?></td>
                            <td><?php echo e($items->usu_id); ?></td>
                            <td>
                                
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>

</div>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/welcome.blade.php ENDPATH**/ ?>