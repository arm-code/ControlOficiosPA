<?php
$servername = "localhost";
$database = "oficios";
$username = "root";
$password = "";
$conn = new Mysqli( "localhost","root","","oficios");

if($conn->connect_error){
    die('Error de Conexión ' . $conn->$connect_erro);
}
