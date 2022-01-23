<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div class="center" >

    <div id="mydiv" class="container">
        <label for="show" class="close-btn fas fa-times" title="close"></label>
        <div class="text">
            Iniciar Sesion
        </div>
        <p>Aun no estas registrado? <a href="<?php echo URLROOT; ?>/users/register">Crea una cuenta aqui</a></p>
        <form action="<?php echo URLROOT; ?>/users/login" method="POST">
            <div class="data">
                <label>DNI:</label>
                <input type="text" placeholder="Username *" name="dni">
                <span class="invalidFeedback">
                   
                </span><br />
            </div>
            <div class="data">
                <label>Contraseña:</label>
                <input type="password" placeholder="Password *" name="password">
                <span class="invalidFeedback">
                   
                </span><br />
            </div>
            <div class="btn">
                <div class="inner"></div>
                <button id="submit" type="submit" value="submit">Submit</button>
            </div>
            <div id="cerrar"><a id="close_login">Cerrar</a></div>
    </div>
    </form>
</div>
