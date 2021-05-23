<?php
require_once 'modelobase.php';

class Usuario extends modelobase
    {
        public $id;
        public $nombre;
        public $apellido;
        public $email;


        public function __construct()
            {
                parent::__construct(); 
            }

            public function setid($id)
            {
                $this->id=$id;
            } 
            
            public function getid()
            {
                $this->id=$id;
            } 

          public function setNombre($Nombre)
            {
                $this->Nombre=$Nombre;
            } 
            
            public function getNombree()
            {
                $this->Nombre=$Nombre;
            } 

            public function setApellido($Apellido)
            {
                $this->Apellido=$Apellido;
            } 

            public function getApellido()
            {
                $this->Apellido=$Apellido;
            } 

            public function setEmail($Email)
            {
                $this->Email=$Email;
            } 

            public function getEmail()
            {
                $this->Email=$Email;
            } 

            public function Create()
                {
                  $sql =  "INSERT INTO usuarios(Nombre,Apellido,Email) VALUES ('{$this->Nombre}','{$this->Apellido}','{$this->Email}')" ;
                  
                  $guardado = $this->db->query($sql);
                  
                  return $guardado;
                }
            
            public function actualizar($pk)
                { 
                  $sql =  "UPDATE usuarios SET Nombre='{$this->Nombre}', Apellido='{$this->Apellido}', Email='{$this->Email}' WHERE id=$pk";
                  $guardado = $this->db->query($sql);
                  return $guardado;
                }
            

            
            
            
            


    }
    ?>