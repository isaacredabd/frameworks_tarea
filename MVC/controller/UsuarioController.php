<?php
class UsuarioController
{


public $imprimir;

    public function crear()
        {
            require_once 'view/usuarios/crear.php';
            
        }

    public function guardar()
        {
          require_once 'model/Usuario.php';
          $user = new Usuario();  
          $user->setNombre($_POST['txtNombre']);
          $user->setApellido($_POST['txtApellido']);
          $user->setEmail($_POST['txtEmail']);
          $guardar = $user->Create();
        
        }

    public function actualizar()
        {
          require_once 'model/Usuario.php';
          $user = new Usuario();  
          $user->setid($_POST['txtid']);
          $user->setNombre($_POST['txtNombre']);
          $user->setApellido($_POST['txtApellido']);
          $user->setEmail($_POST['txtEmail']);
          $pk= $_POST['txtid'];
          $actualizar = $user->actualizar($pk);
        }
      
      public function eliminar()
      {
      require_once 'model/Usuario.php';
      require_once 'model/modelobase.php';
      $variable = $_GET['pasar'];
      echo $variable;
                $obj = new modelobase();
                $obj->eliminar($variable);
      $user = new Usuario();
      $resultUser= $user->eliminar('usuarios'); 
      }


    public function mostrarTodos()
    {
      require_once 'model/Usuario.php';
      $user = new Usuario();
      $resultUser= $user->mostrarTodos('usuarios'); 
      require_once 'view/usuarios/mostrar.php'; 
    }


    public function modificarlistar()
    {
          require_once 'view/usuarios/modificarlistar.php';
          require_once 'model/Usuario.php';
          $variable = $_GET['pasar'];
          $user = new Usuario();    
          return $variable;  
    }

    public function buscar()
    {

    }

    public function Listareliminar()
    {
      require_once 'model/Usuario.php';
      $user = new Usuario();
      $resultUser= $user->mostrarTodos('usuarios'); 
      require_once 'view/usuarios/eliminar.php'; 
    }

    public function listarmodificar()
    {
      require_once 'model/Usuario.php';
      $user = new Usuario();
      $resultUser= $user->mostrarTodos('usuarios'); 
      require_once 'view/usuarios/modificar.php'; 
    }

    public function modificar()
    {
      require_once 'model/Usuario.php';
      require_once 'model/modelobase.php';
      $variable = $_GET['pasar'];
      echo $variable;
                $obj = new modelobase();
                $obj->modificar($variable);
      $user = new Usuario();
      $resultUser= $user->modificar('usuarios'); 
    
    }

}




?>