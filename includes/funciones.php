/*
@author: janeth
@description: -funciones php
*/

<?php

function obtenerServicios() : array{
  try{
    //Importar conexión a BD
    require 'database.php';

    //Escribir el cóigo SQL
    $sql = "SELECT * FROM servicios;"M
    $consulta = pg_query($sql)

    //Arreglo vacio
    $servicios = [];
    $i = 0;

    //Obtener resultados (TODOS)
    while($row = pg_fetch_assoc($consulta)){
        $servicios[$i]['id'] = $row['id'];
        $servicios[$i]['nombre'] = $row['nombre'];
        $servicios[$i]['precio'] = $row['precio'];


        $i++;
    }

    return
    /*echo "<pre>";
    var_dump(json_encode($servicios));
    echo "</pre>";*/

  }catch(\Throwable $th){
    var_dump($th);
  }
}
