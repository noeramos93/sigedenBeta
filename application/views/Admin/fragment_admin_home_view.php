<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            
            <div class="row clearfix">

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">contacts</i>
                        </div>
                        <div class="content">
                            <div class="text">Pacientes</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $pacientes->NUMERO?>" data-speed="1000" data-fresh-interval="1"></div>
                        </div>
                    </div>
                </div>
            </div>
            
           </div>
        
    </section>