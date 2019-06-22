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
class Home_D extends CI_Controller {
	
	/**
	*Funcion constructor de la clase Home_D
	*/
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('name') == FALSE){
			$this->session->set_flashdata("error","ACCESO DENEGADO");
			redirect("Login");
		}else{
			
			$tipo = $this->session->userdata('tipo');
			$ruta = NULL;

			if($tipo == "2"){

			}else{
				
				switch ($tipo) {
	    			case "1":
	        			$ruta = "Admin/Home_A";
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

		$this->load->model("Doctor_model");
	}

	/**
	*Funcion para llamar la vista de la clase Home_D 
	*/
	public function index(){
		//variables para la vista
		$frament = array();
		$frament['VISTA']= $this->load->view('doc_home_view','',TRUE);
		$frament['ccsLibs'] = [''];
        $frament['jsLibs'] = ['hola.js'];

		$this->load->view('dashboard_view',$frament);

	}
}
