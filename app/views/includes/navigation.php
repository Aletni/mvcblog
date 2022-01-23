<div id="header">
    <ul class="nav">
        <?php
        if (isset($_SESSION['dni'])) : ?>
            <?php if (strcmp($_SESSION['id_rol'], '1') == 0 || strcmp($_SESSION['id_rol'], '2') == 0 || strcmp($_SESSION['id_rol'], '3') == 0 || strcmp($_SESSION['id_rol'], '4') == 0) : ?>
                <li>
                    <a href="<?php echo URLROOT; ?>/index" class="sbm">Pagina Principal</a>

                </li>
                <?php if (strcmp($_SESSION['id_rol'], '1') == 0 || strcmp($_SESSION['id_rol'], '3') == 0) : ?>
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
                    <?php endif; ?>
                    <?php if (strcmp($_SESSION['id_rol'], '1') == 0 || strcmp($_SESSION['id_rol'], '3') == 0 || strcmp($_SESSION['id_rol'], '4') == 0) : ?>
                    <li><a href="" class="sbm">Gestion</a>
                        <ul>
                            <?php if (strcmp($_SESSION['id_rol'], '1') == 0 || strcmp($_SESSION['id_rol'], '3') == 0) : ?>
                                <li>
                                    <a href="<?php echo URLROOT; ?>/anhosacademicos" class="sbm">Años Academicos</a>
                                </li>

                                <li>
                                    <a href="<?php echo URLROOT; ?>/asignaturas" class="sbm">Asignaturas</a>
                                </li>
                                <li>
                                    <a href="<?php echo URLROOT; ?>/asistenciasdocencia" class="sbm">Asistencia de Docencia</a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo URLROOT; ?>/asistenciastutoria" class="sbm">Asistencia de Tutorias</a>
                            </li>
                            <?php if (strcmp($_SESSION['id_rol'], '1') == 0 || strcmp($_SESSION['id_rol'], '3') == 0) : ?>
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
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo URLROOT; ?>/grupos" class="sbm">Grupos</a>
                            </li>
                            <li>
                                <a href="<?php echo URLROOT; ?>/horarios" class="sbm">Horarios</a>
                            </li>
                            <?php if (strcmp($_SESSION['id_rol'], '1') == 0 || strcmp($_SESSION['id_rol'], '3') == 0) : ?>
                                <li>
                                    <a href="<?php echo URLROOT; ?>/profesores" class="sbm">Profesores</a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo URLROOT; ?>/tfgs" class="sbm">TFGs y TFMs</a>
                            </li>
                            <?php if (strcmp($_SESSION['id_rol'], '1') == 0 || strcmp($_SESSION['id_rol'], '3') == 0 || strcmp($_SESSION['id_rol'], '2') == 0) : ?>
                                <li>
                                    <a href="<?php echo URLROOT; ?>/titulaciones" class="sbm">Titulaciones</a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo URLROOT; ?>/tutorias" class="sbm">Tutorias</a>
                            </li>
                            <?php if (strcmp($_SESSION['id_rol'], '1') == 0 || strcmp($_SESSION['id_rol'], '3') == 0 || strcmp($_SESSION['id_rol'], '2') == 0) : ?>
                                <li>
                                    <a href="<?php echo URLROOT; ?>/universidades" class="sbm">Universidades</a>
                                </li>
                            <?php endif; ?>
                    </li>
    </ul>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<li class="iniciar-ses" style="float:right">
    <?php if (isset($_SESSION['dni'])) : ?>
        <a href="<?php echo URLROOT; ?>/users/logout">Cerrar Sesion</a>
    <?php else : ?>
        <a id="ini_ses">Iniciar Sesion</a>
    <?php endif; ?>
</li>

</ul>
</div>