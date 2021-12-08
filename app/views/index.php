<?php
   require APPROOT . '/views/includes/head.php';
?>
<div id="section-landing">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>

    <div class="wrapper-landing">
        <<h1>DEMO ENTREGA 1</h1>
        <h2>MVCS basico con Usuarios</h2>
        <h3>Esta demo es una version. La BD utilizada es una version reducida de la final para esta demo.</h3>
        <h3>- Por ahora, la autenticacion y sesion de usuarios no dispone de un jwt funcional</h3>
        <h3>- Por ahora la validacion se hace en controller (no en index)</h3>
        <h3>- Faltan traducciones</h3>
        <h3>- Falta implementacion de Json</h3>
        <h3>- Faltan los tests</h3>
        <h3>- La primera version de las funciones en los servicios no presentan en las vistas los mensajes de error si algun campo se encuentra mal introducido. Si se produce un error, se recarga el formulario. La funcion de actualizacion se encuentra en desarrollo</h3>
    </div>

    
</div>
