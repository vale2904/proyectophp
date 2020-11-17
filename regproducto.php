<?php

include("BaseDatos.php");

if(isset($_POST["boton"])){

    //1. Recibir los datos
    $nombre=$_POST["nombreProducto"];
    $marca=$_POST["marcaProducto"];
    $tiempo=$_POST["tiempoProducto"];
    $precio=$_POST["precioProducto"];
    $cantidad=$_POST["cantidadProducto"];
    $descripcion=$_POST["descripcion"];
    

    
    //2. crear un objeto(copia) de la clase BaseDatos()
    $operacionBD= new BaseDatos();
   

    //3.Necesito crear una consulta SQL para insertar datos
    $consultaSQL="INSERT INTO producto(nombre,marca,tiempo,precio,cantidad,descripcion) VALUES ('$nombre','$marca','$tiempo','$precio','$cantidad','$descripcion')";

    //4. LLamar al metodo agregarDatos() de la clase BaseDatos
    $operacionBD->agregarDatos($consultaSQL);



    

}




?>