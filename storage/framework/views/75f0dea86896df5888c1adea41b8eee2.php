<?php $__env->startSection('home','Crear Usuarios'); ?>

<?php $__env->startSection('contenido'); ?>

<div class="card text-bg-dark mb-3">
    <h5 class="card-header text-center border-4 border-light"> <i class="bi bi-person-plus"></i> Crear</h5>
    <div class="card-body">
      <h5 class="card-title text-center"> <i class="bi bi-person-plus-fill"></i> Crear Usuario</h5>
      <p class="card-text">
        <form action="<?php echo e(route("personas.store")); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="usu_nombre"> <i class="bi bi-person-vcard-fill"></i> Nombre</label>
            <input type="text" name="usu_nombre" id="usu_nombre" placeholder="Introduzca Nombre Usuario" class="form-control" required>
            <label for="usu_telefono"> <i class="bi bi-telephone-fill"></i> Telefono</label>
            <input type="text" name="usu_telefono" id="usu_telefono" placeholder="Introduzca Telefono Usuario" class="form-control" required>
            <label for="usu_email"> <i class="bi bi-envelope-fill"></i> Email</label>
            <input type="text" name="usu_email" id="usu_email" placeholder="Introduzca Email Usuario" class="form-control" required>
            <button type="submit" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Crear</button>
            <a class="btn btn-danger " href="<?php echo e(route("personas.index")); ?>" role="button"><i class="bi bi-x-circle-fill"></i> Cancelar</a>

        </form>
      </p>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/crear.blade.php ENDPATH**/ ?>