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
 <h2>Nuevo rol de usuario:</h2>

    <form action="<?php echo URLROOT; ?>/usersrol/create" method="POST">
         <label for="" class="lbl">id_USUARIO:</label><br />
            <input class="inp" type="number" placeholder="id_USUARIO *" name="id_USUARIO"><br />
            <span class="invalidFeedback">
                <?php echo $data['id_USUARIOError']; ?>
            </span><br />
        
        
        <label for="" class="lbl">id_ROL:</label><br />
            <input class="inp" type="number" placeholder="id_ROL *" name="id_ROL"><br />

            <span class="invalidFeedback">
                <?php echo $data['id_ROLError']; ?>
            </span><br />
        
        
            <div class="btn">
                 <div class="inner"></div>
        <button class="c-usuario" name="submit" type="submit">Guardar</button>
    </form>
</div>
</div>
