<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<h2>Gestion Roles de Usuarios</h2>
<table class="tabla-gestion">
    <tr>
          <th>id_USUARIO</th>
          <th>id_ROL</th>
            <th><div class="iniciar-ses">
    <?php if(isLoggedIn()): ?>
        <a class="btn" href="<?php echo URLROOT; ?>/usersrol/create">
            Crear Rol de Usuario
        </a>
        </div>
    <?php endif; ?></th>
          </tr>
          <tr>
    <?php foreach($data['userrol'] as $userrol): ?>

            <?php //if(isset($_SESSION['dni']) 
            //&& $_SESSION['user_id'] == $post->user_id): ?>
            <?php //endif; ?>
            <td>
                <?php echo $userrol->id_USUARIO; ?>
            </td>
            <td>
                <?php echo $userrol->id_ROL ?>
            </td>
            <td>
             <a
                    class="btn orange"
                    href="<?php echo URLROOT . "/usersrol/update/" . $userrol->id_USUARIO ?>">
                    Actualizar Rol de Usuario
                </a>
                <form action="<?php echo URLROOT . "/usersrol/delete/" . $userrol->id_USUARIO ?>" method="POST">
                    <input type="submit" name="delete" value="Borrar Rol de Usuario" class="btn red">
                </form>
            </td>
            </tr>
        </div>
    <?php endforeach; ?>
</div>
