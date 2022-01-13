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
 <h2>Actualizar Funcionalidad:</h2>

    <form
    action="<?php echo URLROOT; ?>/funcionalidades/update/<?php echo $data->id ?>" method="POST">
        <label for="" class="lbl">ID:</label><br />
            <input class="inp" type="number" placeholder="ID *" name="id" value="<?php echo $data['funcionalidad']->id ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['idError']; ?>
            </span><br />

       <label for="" class="lbl">Nombre:</label><br />
            <input class="inp" type="text" placeholder="Nombre *" name="nombre" value="<?php echo $data['funcionalidad']->nombre ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['nombreError']; ?>
            </span><br />
        <label for="" class="lbl">Descripcion:</label><br />
            <input class="inp" type="text" placeholder="Descripcion *" name="descripcion" value="<?php echo $data['funcionalidad']->descripcion ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['descripcionError']; ?>
            </span><br />
        <label for="" class="lbl">Borrado:</label><br />
            <input class="inp" type="number" placeholder="Borrado *" name="borrado" value="<?php echo $data['funcionalidad']->borrado ?>"><br />
            <span class="invalidFeedback">
                <?php echo $data['borradoError']; ?>
            </span><br />

        <div class="btn">
                 <div class="inner"></div>    
        <button class="c-usuario" name="submit" type="submit">Guardar</button>
    </form>
</div>
</div>



