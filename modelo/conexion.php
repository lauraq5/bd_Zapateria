
<?php 
    // parametros de conexion a la BD
    DEFINE('USER' , 'root');
    DEFINE('PW' , '');
    DEFINE('HOST' , 'localhost');
    DEFINE('BD' , 'bd_Zapateria');

    //Conexion a la BD
    $conexion = mysqli_connect(HOST, USER, PW, BD);

    //Establecer caracteres para el hosting
    mysqli_set_charset($conexion, "utf8mb4");

    // vericamos la conexion con la BD
    if(!$conexion)
    {
        die("La conexion a la BD falló: " +mysqli_error($conexion));
    }
    /*
    else
    {
        die("Conexion exitosa a la BD");
    }*/


?>