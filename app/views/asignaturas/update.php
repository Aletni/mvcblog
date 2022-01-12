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
 <h2>Actualizar año academico:</h2>

    <form
    action="<?php echo URLROOT; ?>/anhosacademicos/update/<?php echo $data['anhoacademico']->id ?>" method="POST">
        <label for="" class="lbl">ID:</label><br />
            <input class="inp" type="number" placeholder="ID *" name="id" value="<?php echo $data['anhoacademico']->id ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['idError']; ?>
            </span><br />

        <label for="" class="lbl">Borrado:</label><br />
            <input class="inp" type="number" placeholder="Borrado *" name="borrado" value="<?php echo $anhoacademico['accion']->borrado ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['borradoError']; ?>
            </span><br />

        <div class="btn">
                 <div class="inner"></div>    
        <button class="c-usuario" name="submit" type="submit">Submit</button>
    </form>
</div>
</div>



