<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<h2>Gestion Asignaturas</h2>
<table class="tabla-gestion">
    <tr>
          <th>Año Academico</th>
          <th>ID Titulacion</th>
          <th>ID Departamento</th>
          <th>ID Profesor</th>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Creditos</th>
          <th>Tipo</th>
          <th>Horas</th>
          <th>Cuatrimestre</th>
          <th>Borrado</th>
          <th><div class="iniciar-ses">
    <?php if(isLoggedIn()): ?>
        <a class="btn" href="<?php echo URLROOT; ?>/asignaturas/create">
            Registrar Asignatura
        </a>
        </div>
    <?php endif; ?></th>  
          </tr>
          <tr>
    <?php foreach($data['asignatura'] as $asignatura): ?>

            <?php //if(isset($_SESSION['dni']) 
            //&& $_SESSION['user_id'] == $post->user_id): ?>
            <?php //endif; ?>
             <td>
                <?php echo $asignatura->id_ANHOACADEMICO; ?>
            </td>
             <td>
                <?php echo $asignatura->id_TITULACION; ?>
            </td>
             <td>
                <?php echo $asignatura->id_DEPARTAMENTO; ?>
            </td>
             <td>
                <?php echo $asignatura->id_PROFESOR; ?>
            </td>
             <td>
                <?php echo $asignatura->codigo; ?>
            </td>
             <td>
                <?php echo $asignatura->nombre; ?>
            </td>
             <td>
                <?php echo $asignatura->creditos; ?>
            </td>
             <td>
                <?php echo $asignatura->tipo; ?>
            </td>
             <td>
                <?php echo $asignatura->horas; ?>
            </td>
             <td>
                <?php echo $asignatura->cuatrimestre; ?>
            </td>
            
            <td>
                <?php echo $asignatura->borrado ?>
            </td>
            <td>
             <a
                    class="btn orange"
                    href="<?php echo URLROOT . "/asignaturas/update/" . $asignatura->id ?>">
                    Actualizar Asignatura
                </a>
                <form action="<?php echo URLROOT . "/asignaturas/delete/" . $asignatura->id ?>" method="POST">
                    <input type="submit" name="delete" value="Borrar Asignatura" class="btn red">
                </form>
            </td>
            </tr>
        </div>
    <?php endforeach; ?>
</div>
