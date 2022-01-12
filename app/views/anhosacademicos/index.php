<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>
<h2>Gestion Años Academicos</h2>
<table class="tabla-gestion">
    <tr>
          <th>Año Academico</th>
          <th>Borrado</th> 
          <th><div class="iniciar-ses">
    <?php if(isLoggedIn()): ?>
        <a class="btn" href="<?php echo URLROOT; ?>/anhosacademicos/create">
            Registrar Año Academico
        </a>
        </div>
    <?php endif; ?></th> 
          </tr>
          <tr>
    <?php foreach($data['anhoacademico'] as $anhoacademico): ?>

            <?php //if(isset($_SESSION['dni']) 
            //&& $_SESSION['user_id'] == $post->user_id): ?>
            <?php //endif; ?>
            <td>
                <?php echo $anhoacademico->id; ?>
            </td>
            
            <td>
                <?php echo $anhoacademico->borrado ?>
            </td>
            <td>
             <a
                    class="btn orange"
                    href="<?php echo URLROOT . "/anhosacademicos/update/" . $anhoacademico->id ?>">
                    Actualizar Año Academico
                </a>
                <form action="<?php echo URLROOT . "/anhosacademicos/delete/" . $anhoacademico->id ?>" method="POST">
                    <input type="submit" name="delete" value="Borrar Año Academico" class="btn red">
                </form>
            </td>
            </tr>
        </div>
    <?php endforeach; ?>
</div>
