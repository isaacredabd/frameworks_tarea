<?php
require_once 'config/database.php';
class modelobase
    {
        public $db;
        public function __construct()
        {
            $this->db = database::conectar();
        }

        public function MostrarTodos($tabla)
            {
                $query=$this->db->query("SELECT * FROM $tabla");
                return $query;
            }

        public function MostrarModificar($id)
            {
                $query=$this->db->query("SELECT * FROM usuarios where id=$id");
                return $query;  
            }

            public function Listareliminar($tabla)
            {
                $query=$this->db->query("SELECT * FROM $tabla");
                return $query;
            }

            
            public function listarmodificar($tabla)
            {
                $query=$this->db->query("SELECT * FROM $tabla");
                return $query;
            }

            public function eliminar($id)
            {
              
                $query=$this->db->query("DELETE FROM usuarios where id=$id");
                
                return $query; 
            }      
    }



    ?>