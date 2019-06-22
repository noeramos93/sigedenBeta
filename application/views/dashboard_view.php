<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
    <!-- Sweet Alert Css -->
    <link href="<?=base_url()?>static/css/sweetalert.css" rel="stylesheet" />
     <!-- Multi Select Css -->
    <link href="<?=base_url()?>static/css/multi-select.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url()?>static/css/theme-blue.css" rel="stylesheet" />
    <?php
        if(!is_null($ccsLibs) && empty($ccsLibs[0]) == false ) :
            foreach ($ccsLibs as $estylos) { ?>
                <link rel="stylesheet" href="<?=base_url()?>static/<?php echo $estylos;?>" type="text/css">
            <?php                                                                 }
        endif;
    ?>
    <!-- Custom Css -->
    <link href="<?=base_url()?>static/css/style.css" rel="stylesheet">

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
                <a class="navbar-brand" href="<?=base_url()?>index.php/Home">SIGEDEN</a>
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
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usr :<?php echo " ".$this->session->userdata('name');?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#modalUser"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="<?=base_url()?>index.php/Login/logaut"><i class="material-icons">settings_power</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->

            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU DE NAVEGACIÓN</li>
                    <li id="m1" class="active" style="display: none;">
                        <a href="<?=base_url()?>index.php/Home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li id="m5" style="display: none;">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person_add</i>
                            <span>Pacientes</span>
                        </a>
                        <ul class="ml-menu">
                            <li id="m6" style="display: none;">
                                <a href="<?=base_url()?>index.php/Paciente">Capturar</a>
                            </li>
                            <li id="m7" style="display: none;">
                                <a href="<?=base_url()?>index.php/Busqueda">Editar</a>
                            </li>
                            <li id="m8" style="display: none;">
                                <a href="<?=base_url()?>index.php/Seguimiento">Seguimiento</a>
                            </li>
                        </ul>
                    </li>

                    <li id="m2" style="display: none;">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person_add</i>
                            <span>Empleados</span>
                        </a>
                        <ul class="ml-menu">
                            <li id="m3" style="display: none;">
                                <a href="<?=base_url()?>index.php/Empleado">Capturar</a>
                            </li>
                            <li id="m4" style="display: none;">
                                <a href="<?=base_url()?>index.php/Empleado/viewEditEmploy">Editar</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li id="m9" style="display: none;">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">tune</i>
                            <span>Parametros</span>
                        </a>
                        <ul class="ml-menu">
                            <li id="m10" style="display: none;">
                                <a href="<?=base_url()?>index.php/Enfermedad">Enfermedades</a>
                            </li>
                            <li id="m11" style="display: none;">
                                <a href="<?=base_url()?>index.php/Adiccion">Toxicomanías</a>
                            </li>
                            <li id="m12" style="display: none;">
                                <a href="<?=base_url()?>index.php/Profesion">Profesiones</a>
                            </li>
                            <li id="m13" style="display: none;">
                                <a href="<?=base_url()?>index.php/Padecimiento_dental">Padecimientos dentales</a>
                            </li>
                        </ul>
                    </li>
                    <li id="m14" style="display: none;">
                        <a href="<?=base_url()?>index.php/Documentos">
                            <i class="material-icons">subject</i>
                            <span> Terminos y condiciones</span>
                        </a>
                    </li>
                    <li id="m15" style="display: none;">
                        <a href="#"><i class="material-icons">bubble_chart</i> <span>Reportes</span> </a>
                    </li>
                    <li id="m16">
                        <a href="<?=base_url()?>index.php/Spech"><i class="material-icons">mic</i> <span>Patron de Voz</span> </a>
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
        <div class="modal fade" id="modalUser" tabindex="-1" role="dialog">
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
                                                <input type="text" id="nombre_p" name="nombre_p" class="form-control" placeholder="Username" focused>
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
                                                <input type="text" id="apellido_p" name="apellido_p" class="form-control" placeholder="Apellido Paterno" >
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
                                                <input type="text" id="apellido_m" name="apellido_m" class="form-control" placeholder="Apellid Materno" >
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
                                                <input type="text" id="password_p" name="password_p" class="form-control" placeholder="Contraseña" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary waves-effect"><i class="material-icons">save</i> Guardar Cambios</button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="material-icons">highlight_off</i>Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BOTON NOTIFICACION-->
            <div class="jsdemo-notification-button" style="display: none;">
                <button id="btnNotific" type="button" class="btn btn-primary bg-red btn-block waves-effect" data-placement-from="top" data-placement-align="center" data-animate-enter="animated zoomInUp" data-animate-exit="animated zoomOutUp" data-color-name="bg-red">
                    TOP CENTER
                    <input id="msgErrorNot" type="text" name="msgErrorNot">
                </button>
            </div>
            <!-- ./BOTON NOTIFICACION-->
                                
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
    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?=base_url()?>static/js/core/bootstrap-notify.min.js"></script>
     <!-- Input Mask Plugin Js -->
    <script src="<?=base_url()?>static/js/core/jquery.inputmask.bundle.js"></script>
    <!-- Multi Select Plugin Js -->
    <script src="<?=base_url()?>static/js/core/jquery.multi-select.js"></script>
    <!-- Tooltips -->
    <script src="<?=base_url()?>static/js/core/tooltips-popovers.js"></script>
     <!-- Jquery Plugin tinymce -->
    <script src="<?=base_url()?>static/js/core/tinymce/tinymce.js"></script>
    <!-- Variables Jquey-->
    <script type="text/javascript">
        var BASE_PATH = "<?=base_url()?>";
        var CITAS_AGENDADAS = new Array();
        <?php
            if(isset($resultado) && !is_null($resultado)) :
                echo "var PAGINA_ACTUAL = '".$resultado['paginActual']."'; \n";
                echo "var PAGINAS_TOTALES = '".$resultado['paginasTotales']."';";
            endif;
        ?>
        <?php
            if(isset($infoPaciente) && !is_null($infoPaciente)) :
                echo "var PAGINAS_CITAS_TOTALES = ".count($infoPaciente)."; \n";
                $arregloCitas = array();
                foreach ($infoPaciente as $numCitas) {
                    array_push($arregloCitas,$numCitas->ID_CITA_PK);
                }
                echo "var ARR_ID_CITAS = [".implode( ", ", $arregloCitas )."];";
            endif;
        ?>
        <?php
            if(isset($citasAg) && !is_null($citasAg)) :
                
                foreach ($citasAg as $ci) {

                    $color = '';

                    if($ci->ESTAT_CITA == '0'){// Cita atendida, Indigo
                        $color = '#3F51B5';
                    }else if($ci->ESTAT_CITA == '1'){// Cita agendada, Teal
                        $color = '#009688';
                    }else if($ci->ESTAT_CITA == '2'){// Re agendada, orange
                        $color = '#FF9800';
                    }else if($ci->ESTAT_CITA == '3'){// Suspendio cita, verde
                        $color = '#4CAF50';
                    }else if($ci->ESTAT_CITA == '4'){// Cancelar cita, deep-red
                        $color = '#FF5722';
                    }else if($ci->ESTAT_CITA == '5'){// No asistio, red
                        $color = '#F44336';
                    }

                    ?>
                    CITAS_AGENDADAS.push({id:'<?php echo $ci->ID_PAC_FK."_".$ci->ID_CITA_PK?>',title:'<?php echo $ci->title?>',start:'<?php echo $ci->start?>'+'T'+'<?php echo $ci->HORA_CITA?>',color:'<?php echo $color;?>'});
                <?php
                }
            endif;
        ?>

        <?php
            if(isset($alertas) && !is_null($alertas)) :
                ?>
                var ALERTAS_ENF = [];
                <?php
                foreach ($alertas as $al) { ?>
                    ALERTAS_ENF.push(<?php echo $al->ID_ENFER_PK?>);
                <?php
                }
            endif;
        ?>
    </script>
    <?php
        if(!is_null($jsLibs)) :
            foreach ($jsLibs as $librerias) { ?>
                <script type="text/javascript" src="<?=base_url()?>static/js/<?php echo $librerias;?>"></script>
            <?php
            }
        endif;
    ?>

    <?php
        if($this->session->flashdata('error')){
    ?>
        <script type="text/javascript">
            $(function(){
                $("#msgErrorNot").val("<?php echo $this->session->flashdata('error')?>");
                $("#btnNotific").click();
            });
        </script>   
    <?php
        }
    ?>
    <!-- Custom Js -->    
    <script src="<?=base_url()?>static/js/core/admin.js"></script>
    <script type="text/javascript">
        var permisos = "<?php echo $this->session->userdata('permisos');?>";
        var arregloPer = permisos.split(",");
        
        for (var i = 0; i < arregloPer.length ; i++) {
            $("#m"+arregloPer[i]).css("display", "block");
        }
    </script>
</body>

</html>