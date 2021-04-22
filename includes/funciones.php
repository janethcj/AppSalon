/*
@author: janeth
@description: -funciones php
*/

<?php

function obtenerServicios(){
  try{
    //Importar conexión a BD
    require 'database.php';

    //Escribir el cóigo SQL
    $sql = "SELECT * FROM servicios;"M
    $consulta = pg_query($sql)

    //Arreglo vacio
    $servicios = [];

    //Obtener resultados (TODOS)
    while($row = pg_fetch_assoc($consulta)){
      echo "<pre>";
      var_dump($row);
      echo "</pre>";
    }

    echo "<pre>";
    var_dump(json_encode($servicios));
    echo "</pre>";

  }catch(\Throwable $th){
    var_dump($th);
  }
}
