<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarea";

//creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

//Verificando la conexión
if ($conn->connect_error){
    die("Falló de la conexión: "  .$conn->connect_error);

}
echo "Conexión correcta";

//Consulta para crear base de datos

$sql ="CREATE TABLE  area (
    id_area INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    area VARCHAR(40)
)";


if ($conn->query($sql) === TRUE){
    echo "Base de datos creada correctamente";
}else{
    echo "Error al crear: "  .$conn->error;
}

$conn->close();
?>