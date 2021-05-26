<?php   
class database
{
    public static function conectar()
    {
        $conexion = new mysqli("localhost","root","lenovo1999","bdnombres");
        $conexion->query("SET NAME 'utf8");
        return $conexion;
    }

}
?>