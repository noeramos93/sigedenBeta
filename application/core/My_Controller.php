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
class My_Controller extends CI_Controller {

    /**
    * Constructor general de clase
    */
    public function __construct(){
        parent::__construct();
        $this->load->model("Catalogo_model");
    }

    /**
    * Funcion para obtener los catalogos
    * del sistema , recibe el nombre del catalogo a buscar
    * @param $catalogo : nombre a buscar
    * @return Lista del catalogo que se busca
    */
    public function getCatalogo($catalogo){
        $resultCatalogo = "";
        switch ($catalogo) {
            case "ESTADOS":
                $resultCatalogo = $this->Catalogo_model->getEstado();
                break;
            case "ENFERMEDADES":
                $resultCatalogo = $this->Catalogo_model->getEnfermedad();
                break;
            case "PROFESIONES":
                $resultCatalogo = $this->Catalogo_model->getProfesiones();
                break;
            case "PADECIMIENTOS":
                $resultCatalogo =  $this->Catalogo_model->getPadecimientos();
                break;
            case "DIENTES":
                $resultCatalogo = $this->Catalogo_model->getDientes();
                break;
            case "TOXICOMANIAS":
                $resultCatalogo = $this->Catalogo_model->getAdicciones();
                break;
            case "FAMILIARES":
                $resultCatalogo = $this->Catalogo_model->getFamily();
                break;
            case "PROCEDIMIENTOS":
                $resultCatalogo = $this->Catalogo_model->getProce();
                break;
        }
        return $resultCatalogo;
    }

    public function validaPermisos($permUsr, $permisos){
        $permisos = explode(",", $this->session->userdata('permisos'));
        return TRUE;
    }

    /**
    * Funcion par acrear las tablas en base al numero 
    * de enfermedades , si el numero de enfermedades sobre 
    * pasa los 6 cuando se quiera mostrar en el pdf 
    * no salen todos los registros, es por eso que se agrega
    * este metodo
    * @param $numTablas : numero de tablas a crear
    * @param $cabecera : registros de la cabecera
    * @param $cuerpo : relacion de enfermedades
    * @param $numero : largo de la tabla
    */
    public function creaTablas($numTablas,$cabecera,$cuerpo,$numero,$tipo){
        //arreglo que contendra el numero de tablas
        $datos = array();

        if($cuerpo == NULL || $cuerpo == ""){
            $datos[0] = "<table class='table font-10'><thead></thead><tbody><tr><td colspan='6' class='text-center'>Sin Antecedentes</td></tr></tbody></table>";
        }else{
            //se le agregan los valores por posiciones al array
            for ($i=0; $i < $numTablas; $i++) {
                
                $inicia = $numero * $i;
                $termina = $numero + $inicia;
                $datos[$i] = $this->rellenarTabla($cabecera,$cuerpo,$inicia,$termina,$tipo);
            }
        }
        return $datos;
    }

    /**
    * Funcion para rellenar la tabla 
    * con la informacion de las relaciones
    * @param $cabecera : Cabecera de la tabla
    * @param $cuerpo : informacion de la tabla
    * @param $ini : donde va iniciar el encabezamiento
    * @param $fin : donde va a terminar el encabezamiento
    */
    public function rellenarTabla($cabecera,$cuerpo,$ini,$fin,$tipo){
        
        if($tipo == '1'){
            $tabla = "<table class='table font-10 text-center'>";
            $tablaHead ="<thead><tr><th class='text-center'>FAMILIAR</th>";
        }else{
            $tabla = "<table class='table font-10 text-center'>";
            $tablaHead ="<thead><tr><th>NOMBRE</th>";
        }
        
        //*********Se agregan las cabeceras a las tablas********
        
        $numRegistros = count($cabecera);
        
        for ($i=$ini; $i < $fin; $i++) {
            
            if($i < $numRegistros){
                $tablaHead = $tablaHead."<th class='text-center'>".$cabecera[$i]->NOMBRE_ENFER."</th>";
            }
        
        }

        $endThead = "</tr></thead>";
        $tablaBody = "<tbody>";
        $seEncontroRel = FALSE;

        //***********se agrega el body a las tablas************

        foreach ($cuerpo as $rel) {
            $enfermedad = explode(",", $rel->ENFERMEDAD);
            $numEnf = count($enfermedad);
            $rowTable = "</tr><td>".$rel->NOMBRE_PAR."</td>";
            //se recorre las enfermedades en base a un inicio y un fin
            for ($i=$ini; $i < $fin; $i++) {
                //es te if es para que en caso de que el fin sea mayor al del arreglo no se rompa
                if($i < $numRegistros){
                    //se recorren los enfermedades relacionadas
                    for ($j=0; $j < $numEnf; $j++) {
                        //se valisa si son iguales
                        if($cabecera[$i]->ID_ENFER_PK == $enfermedad[$j]){
                            //echo "valor 1 ".$cabecera[$i]->ID_ENFER_PK."<br>";
                            //echo "valor 2 ".$enfermedad[$j]."<br>";
                            $seEncontroRel = TRUE;
                            break;
                        }else{
                            $seEncontroRel = FALSE;
                        }
                    }
                    //en base a la variable se agrega si o no
                    if($seEncontroRel == FALSE){
                        //se agrega un No si no corresponde
                        $rowTable = $rowTable."<td>NO</td>";
                    }else{
                        //se agrega un Si cuando sena iguales
                        $rowTable = $rowTable."<td>SI</td>";
                    }
                }
            }
            //se agregan los valores a la tabla
            $tablaBody = $tablaBody.$rowTable."<tr>";
        }
        //*****************************************************
        
        $endTBody = "</tbody>";
        $endTabla = "</table>";
        
        //se concatenan todos los valores para la creacion de la tabla
        $tablaFamily = $tabla.$tablaHead.$endThead.$tablaBody.$endTBody.$endTabla;

        //Se regresa la tabla
        return $tablaFamily;
    }
}