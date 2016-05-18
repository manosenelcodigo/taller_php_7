<?php
//clase, declarar
  //camelcase 
  $nombre="Juan pérez"; 
  class miClase 
  {
     //atributos o propiedades
     
     private $nombre;
     private $correo;
     private $edad;
     
     //constructor, es un método mágico
     public function __construct()
     {
        $this->nombre="César Cancino";
     }
     
     //métodos de tipo públicos o privados
     private function miManzanaRoja()
     {
        
     }
     public function getNombre()
     {
        return $this->nombre;
     }
     
     //métodos estáticos
  }   
    
//instanciar o un objeto
$miClase= new miClase(); 
echo $miClase->getNombre();

    
