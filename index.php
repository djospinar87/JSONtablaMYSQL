<?php

//variables
$host = "localhost";
$user = "root";
$pass = "1210";
$db = "test";

//conexion a la bd
$conn = mysqli_connect($host,$user,$pass,$db);

//condicional
if($conn){
   
    //consulta a la base de datos y se guarda en variable $sql
    $sql = "SELECT descripcion, ficha_tecnica FROM articulos limit 100";
    //resultado de la consulta sql
    $result = mysqli_query($conn,$sql);
    
    $data = array();

    //recorrer el resultado y mostrarlo en pantalla
    while($row = mysqli_fetch_assoc($result)){
        $data [] = $row;
        //echo $row['descripcion']." ".$row['ficha_tecnica']. "<br>";
    }

    echo json_encode($data);

}else{
      echo "Error en la conexion";
    }


?>
