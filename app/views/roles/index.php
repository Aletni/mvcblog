<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<h2>Gestion Acciones</h2>
<table class="tabla-gestion">
    <tr>
          <th>Rol</th>
          <th>nombre</th>
          <th>Borrado</th>
          <th>res_centro</th>
          <th>res_titulacion</th>
          <th>res_asignatura</th>
          <th>res_universidad</th>
            <th><div class="iniciar-ses">
    <?php if(isLoggedIn()): ?>
        <a class="btn" href="<?php echo URLROOT; ?>/roles/create">
            Crear Rol
        </a>
        </div>
    <?php endif; ?></th>
          </tr>
          <tr>
    <?php foreach($data['rol'] as $rol): ?>

            <?php //if(isset($_SESSION['dni']) 
            //&& $_SESSION['user_id'] == $post->user_id): ?>
            <?php //endif; ?>
            <td>
                <?php echo $rol->id; ?>
            </td>
            <td>
                <?php echo $rol->nombre; ?>
            </td>
            <td>
                <?php echo $rol->borrado ?>
            </td>
            <td>
                <?php echo $rol->res_centro ?>
            </td>
            <td>
                <?php echo $rol->res_titulacion ?>
            </td>
            <td>
                <?php echo $rol->res_asignatura ?>
            </td>
            <td>
                <?php echo $rol->res_universidad ?>
            </td>
            <td>
             <a
                    class="btn orange"
                    href="<?php echo URLROOT . "/roles/update/" . $rol->id ?>">
                    Actualizar Rol
                </a>
                <form action="<?php echo URLROOT . "/roles/delete/" . $rol->id ?>" method="POST">
                    <input type="submit" name="delete" value="Borrar Rol" class="btn red">
                </form>
            </td>
            </tr>
        </div>
    <?php endforeach; ?>
</div>
