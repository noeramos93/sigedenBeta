<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido | Doctor</title>
    <!-- Favicon
    <link rel="icon" href="favicon.ico" type="image/x-icon">-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="<?=base_url()?>static/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="<?=base_url()?>static/css/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="<?=base_url()?>static/css/animate.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="<?=base_url()?>static/css/style.css" rel="stylesheet">
    <!-- Sweet Alert Css -->
    <link href="<?=base_url()?>static/css/sweetalert.css" rel="stylesheet" />
     <!-- Multi Select Css -->
    <link href="<?=base_url()?>static/css/multi-select.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url()?>static/css/theme-blue.css" rel="stylesheet" />
    <?php
        if(!is_null($ccsLibs) && empty($ccsLibs[0]) == false ) :
            foreach ($ccsLibs as $estylos) { ?>
                <link rel="stylesheet" href="<?=base_url()?>static/css/<?php echo $estylos;?>" type="text/css">
            <?php                                                                 }
        endif;
    ?>

</head>

<body class="theme-blue">
    
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
        
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">SIGEDEN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <!-- <img src="images/user.png" width="48" height="48" alt="User" /> -->
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dr. <?php echo $this->session->userdata('name');?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="<?=base_url()?>index.php/Login/logaut"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU DE NAVEGACIÓN</li>
                    <li class="active">
                        <a href="<?=base_url()?>index.php/Admin/Home_A">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person_add</i>
                            <span>Empleados</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=base_url()?>index.php/Empleado">Capturar</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/Empleado/viewEditEmploy">Editar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person_add</i>
                            <span>Pacientes</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=base_url()?>index.php/Paciente">Capturar</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/Paciente/viewEditPatient">Editar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">tune</i>
                            <span>Parametros</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=base_url()?>index.php/Enfermedad">Enfermedades</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/Adiccion">Toxicomanías</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/Profesion">Profesiones</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/Padecimiento_dental">Padecimientos dentales</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=base_url()?>index.php/Documentos">
                            <i class="material-icons">subject</i>
                            <span> Terminos y condiciones</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons">bubble_chart</i> <span>Reportes</span> </a>
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <b>Version: </b> 1.0.5
                </div>
                <div class="version">
                    <a href="javascript:void(0);">AdminBSB - Material Design, Noé Ramos López</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        
    </section>
    <!-- **********************************INICIA SECCION VISTA******************************************-->
    <?=$VISTA?>
    <!-- ********************************TERMINA SECCION VISTA*********************************************-->
                <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Datos de usuario</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row clearfix">
                                <div class="col-md-12">

                                    <div class="col-md-10">
                                        <b>Nombre</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" id="nombre_p" name="nombre_p" class="form-control" placeholder="Nombre de usuario" focused>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <b>Apellido Paterno</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" id="app_p" name="app_p" class="form-control" placeholder="Apellido Paterno" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <b>Apellido Materno</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" id="apm_p" name="apm_p" class="form-control" placeholder="Apellido Materno" >
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="col-md-10">
                                        <b>Contraseña</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" >
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info waves-effect">Guardar Cambios</button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>


    <!-- Jquery Core Js -->
    <script src="<?=base_url()?>static/js/core/jquery.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?=base_url()?>static/bootstrap/js/bootstrap.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url()?>static/js/core/jquery.slimscroll.js"></script> 
    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url()?>static/js/core/waves.js"></script>
    <!-- Jquery Validation Plugin Css -->
    <script src="<?=base_url()?>static/js/core/jquery.validate.js"></script>
    <!-- JQuery Steps Plugin Js -->
    <script src="<?=base_url()?>static/js/core/jquery.steps.js"></script>
    <!-- Sweet Alert Plugin Js -->
    <script src="<?=base_url()?>static/js/core/sweetalert-dev.js"></script>
     <!-- Input Mask Plugin Js -->
    <script src="<?=base_url()?>static/js/core/jquery.inputmask.bundle.js"></script>
    <!-- Multi Select Plugin Js -->
    <script src="<?=base_url()?>static/js/core/jquery.multi-select.js"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="<?=base_url()?>static/js/core/jquery.countTo.js"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="<?=base_url()?>static/js/core/tinymce/tinymce.js"></script>
    <!-- Variables Jquey-->
    <script type="text/javascript">
        var BASE_PATH = "<?=base_url()?>";
        <?php

            if(isset($resultado) && !is_null($resultado)) :
                echo "var PAGINA_ACTUAL = '".$resultado['paginActual']."'; \n";
                echo "var PAGINAS_TOTALES = '".$resultado['paginasTotales']."';";
            endif;
        ?>
    </script>
    <!-- Custom Js -->
    <script src="<?=base_url()?>static/js/core/admin.js"></script>
    <?php
        if(!is_null($jsLibs)) :
            foreach ($jsLibs as $librerias) { ?>
                <script type="text/javascript" src="<?=base_url()?>static/js/<?php echo $librerias;?>"></script>
            <?php
            }
        endif;
    ?>
</body>

</html>