<?php

class Pasajero {
    
    var $nombre;
    var $nif;
    var $fNacimiento;
    var $discapacidad;

    function __construct ($nombre, $nif, $fNacimiento, $discapacidad){
        $this->nombre = $nombre;
        $this->nif = $nif;
        $this->fNacimiento = $fNacimiento;
        $this->discapacidad = $discapacidad;


       function setNombre ($nombre){
            $this->nombre = $nombre;
        }

        function getNombre (){
            return $this->nombre;
    
        }   
    
    
        function setNif ($nif){
            $this->nif = $nif;
        }

        function getNif (){
            return $this->nif;
    
        }
    
        function setFNacimiento ($fNacimiento){
            $this->setFNacimiento = $fNacimiento;
    
        }
    
        function getFNacimiento (){
            return $this->fNacimiento;
    
        }
    
        function setDiscapacidad ($discapacidad){
            $this->setDiscapacidad = $discapacidad;
    
        }
    
        function getDiscapacidad (){
            return $this->discapacidad;
    
        }


        function calcularEdad (){ //se puede poner getEdad
        $date1 = new DateTime( date('y-m-d') );  //Tambien vale $date1 = new DateTime('now');
        $date2 = new DateTime($this->fNacimiento);
        $diff = $date1->diff($date2); //diferencia entre fechas     
        return $diff->y;  


        }

        
        function mostrar(){

            echo "El nombre es".getNombre();
            echo "<br>";
            echo "El nif es".getNif();
            echo "<br>";
            echo "La fecha de nacimiento es".getFNacimiento();
            echo "<br>";
            echo "Tiene discapacidad".getDiscapacidad();
            echo "<br>";

        }
        

    }
    
        

}

