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
 <h2>Actualizar Rol de Usuario:</h2>

    <form
    action="<?php echo URLROOT; ?>/usersrol/update/<?php echo $data['userrol']->id_USUARIO ?>" method="POST">
        <label for="" class="lbl">id_USUARIO:</label><br />
            <input class="inp" type="number" placeholder="id_USUARIO *" name="id_USUARIO" value="<?php echo $data['userrol']->id_USUARIO ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['id_USUARIOError']; ?>
            </span><br />

        <label for="" class="lbl">id_ROLError:</label><br />
            <input class="inp" type="number" placeholder="id_ROLError *" name="id_ROLError" value="<?php echo $data['userrol']->id_ROLError ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['id_ROLError']; ?>
            </span><br />

        <div class="btn">
                 <div class="inner"></div>    
        <button class="c-usuario" name="submit" type="submit">Guardar</button>
    </form>
</div>
</div>



