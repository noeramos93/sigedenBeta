<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author TSU, Noé Ramos
 * @version 0.1
 * @copyright Noe ramos lopez, Todos los derechos reservados 2018.
 * Fecha de creacion 8-11-2018.
 * Fecha Modificacion 9-11-2018.
*/

class My_Model extends CI_Model{
    /**
    * Contrsutor para la clase 
    * Profesion Model
    */
    public function __construct(){
         parent::__construct();
        $this->load->database();
    }

    /**
    * Funcion para generar una consulta
    * con paginacion.
    * @param $subQuery el query original
    * @param $numReg el numero de registros por pagina
    * @param $paginaConsulta la pagina a consultar
    * @return $paginacionArray arreglo con la informacion genrada
    */
    public function getTablaPaginada($subQuery,$numReg,$paginaConsulta){

        $paginacionArray = array();
        
        //si es nulo el total de registros se inicializa el 5
        if(is_null($numReg)){
            $numReg = 5;
        }

        //si la pagina a consultar es nula Se inicializa en 0
        if(is_null($paginaConsulta)){
            $paginaConsulta = 0;
        }

        //Obtenemos el total de registros por query ejecutado SELECT COUNT(*) FROM (SELECT * FROM TABLA ) AS TOTAL;
        $this->db->select('COUNT(*) AS TOTAL');
        $this->db->from('('.$subQuery.') AS TABLA');
        $resulTot = $this->db->get();
        $total = $resulTot->result()[0]->TOTAL;
        $totalPaginas = ceil($total / $numReg);

        //multiplicamos el numero de registros por el valor de la pagina actual para obtener desde donde se va a continuar
        $continua = $numReg * $paginaConsulta;

        //se ejecuta el query que se creo al principio con el limit
        $queryFinal = $this->db->query($subQuery.' LIMIT '.$continua.','.$numReg);
        
        //si el query no regresa informacion inicializamos la variable en nulo
        if($queryFinal->num_rows() <= 0){
            $paginacionArray['lista'] = NULL;
        }else{
            $paginacionArray['lista'] = $queryFinal->result();
        }
        
        $paginacionArray['paginasTotales'] = "$totalPaginas";
        $paginacionArray['paginActual'] = $paginaConsulta;

        //Regresamos el arreglo con la pagina actual,el total de paginas, y la lista consultada
        return $paginacionArray;
    }
}