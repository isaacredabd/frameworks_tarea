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
          $resultUser= $user->mostrarTodos('usuarios'); 
          require_once 'view/usuarios/mostrar.php'; 
        }

    public function actualizar()
        {
          require_once 'model/Usuario.php';
          $user = new Usuario();  
          $user->setid($_POST['txtid']);
          $user->setNombre($_POST['txtNombre']);
          $user->setApellido($_POST['txtApellido']);
          $user->setEmail($_POST['txtEmail']);
          $id= $_POST['txtid'];
          $actualizar = $user->actualizar($id);
          $resultUser= $user->mostrarTodos('usuarios'); 
          require_once 'view/usuarios/modificar.php'; 
        }
      
      public function eliminar()
      { 
      require_once 'model/Usuario.php';
      require_once 'model/modelobase.php';
      $id = $_GET['id'];
      $obj = new modelobase();
      $obj->eliminar($id);
      $user = new Usuario();
      $resultUser= $user->eliminar('usuarios'); 
      $resultUser= $user->mostrarTodos('usuarios'); 
      require_once 'view/usuarios/eliminar.php'; 
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
          require_once 'model/Usuario.php';
          $variable = $_GET['id'];
          $user = new Usuario();   
          $resultUser= $user->MostrarModificar($variable);  
          require_once 'view/usuarios/modificarlistar.php';   
          return $variable;
    }

    public function buscar()
    {
      require_once 'model/Usuario.php';
      $user = new Usuario();
      $resultUser= $user->mostrarTodos('usuarios'); 
      require_once 'view/usuarios/buscar.php';
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
      $variable = $_GET['id'];
                $obj = new modelobase();
                $obj->modificar($variable);
      $user = new Usuario();
      $resultUser= $user->modificar('usuarios'); 
    
    }

}




?>