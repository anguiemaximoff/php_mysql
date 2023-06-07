<?php
    const DBHOST="localhost";
    const DBUSER="root";
    const PASSWORD = "";
    const DB="mytuiter";

    //$conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);
    //var_dumb($conexion);

    function connect()
    {
        $conexion= mysqli_connect (DBHOST,DBUSER,PASSWORD,DB);
    
        return $conexion;
    }

?>