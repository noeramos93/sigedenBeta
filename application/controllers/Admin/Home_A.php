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
class Home_A extends CI_Controller {
	
	/**
	*Funcion constrcutor de la clase Home_A
	*/
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('name') == FALSE){
			$this->session->set_flashdata("error","ACCESO DENEGADO");
			redirect("Login");
		}else{
			
			$tipo = $this->session->userdata('tipo');
			$ruta = NULL;

			if($tipo == "1"){

			}else{
				
				switch ($tipo) {
	    			case "2":
	        			$ruta = "Doctor/Home_D";
	        			break;
	    			case "3":
	        			$ruta = "Asistente/Home_S";
	        			break;
	        		case "4":
	        			$ruta = "Paciente/Home_P";
	        			break;
				}
				redirect($ruta);
			}
		}

		$this->load->model("Admin_model");
	}

	/**
	*Funcion para llamar la vista de la clase Home_A
	*/
	public function index(){
		$infoHome = array();
		$infoHome['pacientes'] = $this->Admin_model->totalPacientes();

		$fragment = array();
		$fragment['VISTA'] = $this->load->view('admin_home_view',$infoHome,TRUE);
		$fragment['ccsLibs'] = [""];
        $fragment['jsLibs'] = ['home.js'];
		
		$this->load->view('dashboard_view',$fragment);
	}
}
