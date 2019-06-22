<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author TSU, Noé Ramos López
 * @version 1.0
 * @copyright Todos los derechos reservados 2018
 * Controlodar para las profesiones
 * Fecha de creacion : N/A
 * Fecha de actualzacion : 13-11-2018
*/
class Home extends CI_Controller {
	
	/**
	*Funcion constructor de la clase Home_D
	*/
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('name') == FALSE){
			$this->session->set_flashdata("error","ACCESO DENEGADO");
			redirect("Login");
		}else{
            $numeroPermiso = '1';
            $permisos = explode(",", $this->session->userdata('permisos'));
            $numPer = count($permisos);
            $tienePermiso = FALSE;

            for ($i=0; $i < $numPer; $i++) {
                if($numeroPermiso == $permisos[$i]){
                    $tienePermiso = TRUE;
                    break;
                }
            }

            if($tienePermiso == FALSE){
                $this->session->set_flashdata("error","No Tiene Permisos (O_O;)");
                redirect("Login");
            }
		}
        $this->load->model("Admin_model");
		$this->load->model("Doctor_model");
	}

	/**
	*Funcion para llamar la vista de la clase Home
	*/
	public function index(){
		//variables para la vista

        $frament = array();
        $infoAdmin = array();
        $fechaActual = date("Y-m-d");
        $idDoctor = $this->session->userdata('id');
        // actualizamos la agenda de los pacientes que no se hayan atendidos
        $this->Admin_model->actualizaCitasNoatendida($fechaActual,$idDoctor);
        //actualizamos las citas que no se hayan atendido
        $this->Admin_model->actualizaCitasNoatendida($fechaActual,$idDoctor);

        if($this->session->userdata('tipo') == '1'){

            $infoAdmin['pacientes'] = $this->Admin_model->totalPacientes($idDoctor);
            $infoAdmin['citas'] = $this->Admin_model->totalCitas($idDoctor,$fechaActual);
            
            $frament['VISTA']= $this->load->view('admin_home_view',$infoAdmin,TRUE);
        }else{

            $infoAdmin['citas'] = $this->Admin_model->totalCitas($idDoctor,$fechaActual);
            
            $frament['VISTA']= $this->load->view('doc_home_view',$infoAdmin,TRUE);
        }
		
		
		$frament['ccsLibs'] = [''];
        $frament['jsLibs'] = ['core/jquery.countTo.js','home.js','core/notifications.js'];

		$this->load->view('dashboard_view',$frament);

	}
}
