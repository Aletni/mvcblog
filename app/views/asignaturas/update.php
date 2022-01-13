<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div id="main-container">
      <div id="form-alta">
 <h2>Actualizar Asignatura:</h2>

    <form
    action="<?php echo URLROOT; ?>/asignaturas/update/<?php echo $data['asignatura']->id ?>" method="POST">
        <label for="" class="lbl">ID:</label><br />
            <input class="inp" type="number" placeholder="ID *" name="id" value="<?php echo $data['asignatura']->id ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['idError']; ?>
            </span><br />

            <label for="" class="lbl">Año Academico:</label><br />
            <input class="inp" type="text" placeholder="Año Academico *" name="id_ANHOACADEMICO" value="<?php echo $data['asignatura']->nombre ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['id_ANHOACADEMICOError']; ?>
            </span><br />

             <label for="" class="lbl">ID Titulacion:</label><br />
            <input class="inp" type="number" placeholder="Titulacion *" name="id_TITULACION" value="<?php echo $data['asignatura']->id_TITULACION ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['id_TITULACIONError']; ?>
            </span><br />

             <label for="" class="lbl">ID Departamento:</label><br />
            <input class="inp" type="number" placeholder="Departamento *" name="id_DEPARTAMENTO" value="<?php echo $data['asignatura']->id_DEPARTAMENTO ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['id_DEPARTAMENTOError']; ?>
            </span><br />

             <label for="" class="lbl">ID Profesor:</label><br />
            <input class="inp" type="text" placeholder="Profesor *" name="id_PROFESOR" value="<?php echo $data['asignatura']->id_PROFESOR ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['id_PROFESORError']; ?>
            </span><br />

             <label for="" class="lbl">Codigo:</label><br />
            <input class="inp" type="number" placeholder="Codigo *" name="codigo" value="<?php echo $data['asignatura']->codigo ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['codigoError']; ?>
            </span><br />

             <label for="" class="lbl">Nombre:</label><br />
            <input class="inp" type="number" placeholder="Nombre *" name="nombre" value="<?php echo $data['asignatura']->nombre ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['nombreError']; ?>
            </span><br />

             <label for="" class="lbl">Creditos:</label><br />
            <input class="inp" type="text" placeholder="Creditos *" name="creditos" value="<?php echo $data['asignatura']->creditos ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['creditosError']; ?>
            </span><br />

             <label for="" class="lbl">Tipo:</label><br />
            <input class="inp" type="text" placeholder="Tipo *" name="tipo" value="<?php echo $data['asignatura']->tipo ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['tipoError']; ?>
            </span><br />

             <label for="" class="lbl">Horas:</label><br />
            <input class="inp" type="number" placeholder="Horas *" name="horas" value="<?php echo $data['asignatura']->horas ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['horasError']; ?>
            </span><br />

             <label for="" class="lbl">Cuatrimestre:</label><br />
            <input class="inp" type="number" placeholder="Cuatrimestre *" name="cuatrimestre" value="<?php echo $data['asignatura']->cuatrimestre ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['cuatrimestreError']; ?>
            </span><br />

        <label for="" class="lbl">Borrado:</label><br />
            <input class="inp" type="number" placeholder="Borrado *" name="borrado" value="<?php echo $data['asignatura']->borrado ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['borradoError']; ?>
            </span><br />

        <div class="btn">
                 <div class="inner"></div>    
        <button class="c-usuario" name="submit" type="submit">Guardar</button>
    </form>
</div>
</div>



