<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<h2>Gestion Funcionalidades</h2>
<table class="tabla-gestion">
    <tr>
          <th>Funcionalidad</th>
          <th>Descripcion</th>
          <th>Borrado</th>
            <th><div class="iniciar-ses">
    <?php if(isLoggedIn()): ?>
        <a class="btn" href="<?php echo URLROOT; ?>/funcionalidades/create">
            Crear Funcionalidad
        </a>
        </div>
    <?php endif; ?></th>
          </tr>
          <tr>
    <?php foreach($data['funcionalidad'] as $funcionalidad): ?>

            <?php //if(isset($_SESSION['dni']) 
            //&& $_SESSION['user_id'] == $post->user_id): ?>
            <?php //endif; ?>
            <td>
                <?php echo $funcionalidad->nombre; ?>
            </td>
            <td>
                <?php echo $funcionalidad->descripcion ?>
            </td>
            <td>
                <?php echo $funcionalidad->borrado ?>
            </td>
            <td>
             <a
                    class="btn orange"
                    href="<?php echo URLROOT . "/funcionalidades/update/" . $funcionalidad->id ?>">
                    Actualizar Funcionalidad
                </a>
                <form action="<?php echo URLROOT . "/funcionalidades/delete/" . $funcionalidad->id ?>" method="POST">
                    <input type="submit" name="delete" value="Borrar Funcionalidad" class="btn red">
                </form>
            </td>
            </tr>
        </div>
    <?php endforeach; ?>
</div>
