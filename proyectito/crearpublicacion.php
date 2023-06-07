<?php
    $include =include ("./config.php");
    $con = connect(); 

    if($include && $con){
    //$descripcion == (isset)
    $descripcion="Quiero mi cocol";
    $fecha= "01-06-2023";
    $hora= "11:00";
    $corazon=28;
    $n_comentarios=5;
    $n_retuits= 15;

    //valores://
    $peticion = "INSERT INTO publicacion VALUES (0,1, '$descripcion','$fecha','$hora', $corazon,$n_comentarios, $n_retuits)";
    $query = mysqli_query($con, $peticion);
    var_dump($query); //te devuelve true si todo salió OK y false si no :((

    //Tablita usuarios
    // $sql="SELECT * FROM usuarios";
    // $query = mysqli_query($con, $sql);
    // var_dump($query);


    // $sql="SELECT * FROM usuarios";
    // $query = mysqli_query($con, $sql);
    //$datos = mysqli_fetch_array($query);
    //var_dump($datos);
    
    
    //muestra la tablita usuarios pero solo una vez 
    // $sql="SELECT * FROM usuarios";
    // $query = mysqli_query($con, $sql);
    //$datos = mysqli_fetch_assoc($query);
    //var_dump($datos);

    //muestra la tablita publicación 
    // $sql="SELECT * FROM publicacion";
    // $query = mysqli_query($con, $sql);
    // $datos = mysqli_fetch_assoc($query);
    // var_dump($datos);

    //Con el while se ven TODOS los registros de publicacion
    // $sql="SELECT * FROM publicacion";
    // $query = mysqli_query($con, $sql);
    // while($row=mysqli_fetch_assoc($query))
    // {
    //     echo "<br>";
    //     echo "<br>";
    //     var_dump($row);
    // }

    
    //Para información más específica 
    // $sql="SELECT * FROM publicacion";
    // $query = mysqli_query($con, $sql);
    // while($row=mysqli_fetch_assoc($query))
    // {
    //     echo "<br>";
    //     echo "<br>";
    //     var_dump($row["n_comentarios"]);
    // }

}


?>
