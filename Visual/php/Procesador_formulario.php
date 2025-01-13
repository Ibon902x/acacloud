<?php

$user="root";
$pass= "" ;
$server="LOCALHOST";
$DB="proyecto";

$mysqli=new mysqli($server,$user,$pass,$DB);

if ($mysqli->connect_error){
        echo "lo siento no hubo conexion a la base de datos";
} 
else{
    echo "Bienvenidos";
    $Nombre = $_POST['nombre'];
    $Apellido = $_POST['apellido'];
    $Email = $_POST['email'];
    $Dirección = $_POST['direccion'];
    $Teléfono = $_POST['telefono'];

    $sql="INSERT INTO clientes values('".$Nombre."','".$Apellido."','".$Email."','".$Dirección."','".$Teléfono."')";
    
    $mysqli->query($sql);
    echo "Datos guardados";
}

$mysqli->close();

?>