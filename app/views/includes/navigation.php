<div id="header">
    <ul class="nav">
        <li>
            <a href="<?php echo URLROOT; ?>/index" class="sbm">Pagina Principal</a>
        </li>
        
            <li><a href="" class="sbm">Administracion</a>
            <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/acciones" class="sbm">Acciones</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/funcionalidades" class="sbm">Funcionalidades</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/roles" class="sbm">Roles</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/rolespermiso" class="sbm">Permisos</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/users" class="sbm">Usuarios</a>
        </li>
         <li>
            <a href="<?php echo URLROOT; ?>/usersrol" class="sbm">Asignaciones de Roles</a>
        </li>
        </ul>
        <li><a href="" class="sbm">Gestion</a>
            <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/anhosacademicos" class="sbm">Años Academicos</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/asignaturas" class="sbm">Asignaturas</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/asistenciasdocencia" class="sbm">Asistencia de Docencia</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/asistenciastutoria" class="sbm">Asistencia de Tutorias</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/centros" class="sbm">Centros</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/departamentos" class="sbm">Departamentos</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/edificios" class="sbm">Edificios</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/espacios" class="sbm">Espacios</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/grupos" class="sbm">Grupos</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/horarios" class="sbm">Horarios</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/profesores" class="sbm">Profesores</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/tfgs" class="sbm">TFGs y TFMs</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/titulaciones" class="sbm">Titulaciones</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/tutorias" class="sbm">Tutorias</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/universidades" class="sbm">Universidades</a>
        </li>
       
        </ul>
        <li class="iniciar-ses" style="float:right">
            <?php if(isset($_SESSION['dni'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Cerrar Sesion</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Iniciar Sesion</a>
            <?php endif; ?>
        </li>
    </ul>
    
