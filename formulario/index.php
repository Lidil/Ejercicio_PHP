<?php

if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];


//Conexion

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";

//Crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);

//Comprobar conexion
if($conn ->connect_error){
    die("Connection failed: " .$conn->connect_error);
}
$sql = "INSERT INTO usuario (nombre, apellido, email) 
VALUES ('$nombre', '$apellido', '$email')";

if($conn->query($sql)===TRUE){
    echo"Nuevo usuario creado con exito";
    echo"<p>Nombre: ".$nombre."<br></p>";
    echo"<p>Apellido: " .$apellido."<br></p>";
    echo "<p>Email: ". $email."<br>";
}else{
    echo"Error: " . $sql ."<br>" . $conn->error;
}

$conn->close();
}

?>
