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
 <h2>Nuevo rol:</h2>

    <form action="<?php echo URLROOT; ?>/roles/create" method="POST">
         <label for="" class="lbl">ID:</label><br />
            <input class="inp" type="number" placeholder="ID *" name="id"><br />
            <span class="invalidFeedback">
                <?php echo $data['idError']; ?>
            </span><br />
        
        
        <label for="" class="lbl">Nombre rol:</label><br />
            <input class="inp" type="text" placeholder="Nombre *" name="nombre"><br />

            <span class="invalidFeedback">
                <?php echo $data['nombreError']; ?>
            </span><br />
        
      
        
        <label for="" class="lbl">Borrado:</label><br />
            <input class="inp" type="number" placeholder="Borrado *" name="borrado"><br />
            <span class="invalidFeedback">
                <?php echo $data['borradoError']; ?>
            </span><br />
            <label for="" class="lbl">res_centro:</label><br />
            <input class="inp" type="text" placeholder="res_centro *" name="res_centro"><br />

            <span class="invalidFeedback">
                <?php echo $data['res_centroError']; ?>
            </span><br />
            <label for="" class="lbl">res_titulacion:</label><br />
            <input class="inp" type="text" placeholder="res_titulacion *" name="res_titulacion"><br />

            <span class="invalidFeedback">
                <?php echo $data['res_titulacionError']; ?>
            </span><br />
            <label for="" class="lbl">res_asignatura:</label><br />
            <input class="inp" type="text" placeholder="res_asignatura *" name="res_asignatura"><br />

            <span class="invalidFeedback">
                <?php echo $data['res_asignaturaError']; ?>
            </span><br />
            <label for="" class="lbl">res_universidad:</label><br />
            <input class="inp" type="text" placeholder="res_universidad *" name="res_universidad"><br />

            <span class="invalidFeedback">
                <?php echo $data['res_universidadError']; ?>
            </span><br />
        
        
            <div class="btn">
                 <div class="inner"></div>
        <button class="c-usuario" name="submit" type="submit">Guardar</button>
    </form>
</div>
</div>
