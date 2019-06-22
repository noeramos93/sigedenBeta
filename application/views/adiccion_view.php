<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <section class="content">
        
        <div class="container-fluid">
            
            <div class="block-header">
                <h2>Toxicomanías</h2>
            </div>
            
            <div class="row clearfix">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header">
                            <h2>
                                Toxicomanías
                            </h2>
                        </div>
                        
                        <div class="body">
                            <div class="row">
                                <div class="col-md-3">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#formToxicamania">
                                        <i class="material-icons">add_box</i> Agregar Toxicomanía 
                                    </button>
                                </div> 
                                <div class="col-md-12">
                                    <div class="row">
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">filter_list</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input id="name_filter" type="text" class="form-control" placeholder="Nombre Profesion">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="button" id="btn_filto" class="btn btn-primary btn-lg m-l-15 waves-effect">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </div>
                                        </div>                   
                                    <div class="table-responsive">
                                        <table id="table_adiccion" class="table tabla-paginada">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>NOMBRE DE LA TOXICOMANIA</th>
                                                    <th>ACCION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                    if(!is_null($resultado['lista'])) :
                                                        foreach ($resultado['lista'] as $ad) { ?>
                                                            <tr id="tr-<?php echo  $ad->ID_ADIC_PK?>">
                                                                <td><?php echo $ad->ID_ADIC_PK;?></td>
                                                                <td><?php echo $ad->NOM_ADIC;?></td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger waves-effect delete-adic" data-id="<?php echo $ad->ID_ADIC_PK?>" data-toggle="tooltip" data-placement="top" title="Eliminar Toxicomanía">
                                                                        <i class="material-icons">delete_sweep</i> 
                                                                    </button>
                                                                    <button type="button" class="btn btn-warning waves-effect edit-adic" data-id="<?php echo $ad->ID_ADIC_PK?>" data-toggle="tooltip" data-placement="top" title="Editar Toxicomanía"> 
                                                                         <i class="material-icons">create</i> 
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                <?php
                                                        }
                                                    endif;
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="modal fade" id="formToxicamania" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Agregar Toxicomanía</h4>
                        </div>
                        <div class="modal-body">
                        <!-- Formulario modal-->
                            <div class="row clearfix">
                                <div class="col-md-12">

                                    <div class="col-md-10">
                                        <b>Nombre Toxicomanía</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">add_box</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" id="nombreToxicomania" name="nombreToxicomania" class="form-control" placeholder="Nombre Toxicomania" focused>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Formulario modal-->
                        </div>
                        <div class="modal-footer">
                            <button id="btn_save_toxicomania" type="button" class="btn btn-primary waves-effect">Guardar Cambios</button>
                            <button id="dont_save_toxicomania" type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>


            
            <div class="modal fade" id="editToxicomania" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Actualizar Toxicomanía</h4>
                        </div>
                        <div class="modal-body">
                        <!-- Formulario modal-->
                            <div class="row clearfix">
                                <div class="col-md-12">

                                    <div class="col-md-10">
                                        <b>Nombre Toxicomanía</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" id="idEditToxicomania" name="idEditToxicomania" style="display:none">
                                                <input type="text" id="nameEditToxicomania" name="nameEditToxicomania" class="form-control" placeholder="Nombre Toxicomanía" focused>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Formulario modal-->
                        </div>
                        <div class="modal-footer">
                            <button id="btn_edit_toxicomania" type="button" class="btn btn-primary waves-effect">Guardar Cambios</button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>