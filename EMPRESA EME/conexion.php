<?php

$conectar = mysqli_connect('localhost','root','');
  
if (!$conectar) {
    echo("Error de conexión");
}else{

    $base=mysql_select_db('registros')
    if(!$base){
        echo"No se encontro"
    }
}
      
    $Nombre=$_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $Correo=$_POST['Correo'];
    $Telefono=$_POST['Telefono'];
    $Comentarios=$_POST['Comentario'];

    $sql="INSERT INTO clientes VALUES('$nombre',
                                   '$apellido',
                                   '$correo',
                                   '$telefono',
                                   '$comentarios')";

    $ejecutar=mysql_query($sql);
    if(!$ejecutar){
        echo="Hubo Algun Error";
    }else{
        echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>"
    }
?>