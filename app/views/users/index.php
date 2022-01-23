<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<h2>Gestion Usuarios</h2>
<table class="tabla-gestion">
    <tr>
          <th>DNI</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Email</th>
          <th>Password</th>
          <th>Borrado</th>
            <th><div class="iniciar-ses">
    <?php if(isLoggedIn()): ?>
        <a class="btn" href="<?php echo URLROOT; ?>/users/register">
            Crear Usuario
        </a>
        </div>
    <?php endif; ?></th>
          </tr>
          <tr>
    <?php foreach($data['user'] as $user): ?>

            <?php //if(isset($_SESSION['dni']) 
            //&& $_SESSION['user_id'] == $post->user_id): ?>
            <?php //endif; ?>
            <td>
                <?php echo $user->dni; ?>
            </td>
            <td>
                <?php echo $user->nombre ?>
            </td>
            <td>
                <?php echo $user->apellidos ?>
            </td>
            <td>
                <?php echo $user->email ?>
            </td>
            <td>
                <?php echo $user->email ?>
            </td>
            <td>
                <?php echo $user->borrado ?>
            </td>
            <td>
            
                
                </form>
            </td>
            </tr>
        </div>
    <?php endforeach; ?>
</div>
