<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}./Models/Alumno.php";

class AdminEstadoMatriculaController {
    
    function __construct() {
        
    }
     public function getalldata($variable){
           $objalumno = new Alumno();
           $data1 = $objalumno->getAllAluxEscuela($variable);
           return $data1;
        }
        
         
       public function getuserdata($variable,$start,$limit,$sidx,$sord){
           $objalumno = new Alumno();
           $data1 = $objalumno->getAluxEscuela($variable,$start,$limit,$sidx,$sord);
           return $data1;
        }
        
       public function getcursos($variable){
           $objalumno = new Alumno();
           $data1 = $objalumno->getAllCursos($variable);
           return $data1;
        }
        
        public function getuserestado($variable){
           $objalumno = new Alumno();
           $data2 = $objalumno->getestado($variable);
           return $data2;
        }


}

?>
