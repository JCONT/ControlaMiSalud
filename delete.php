<?php

include("db.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM estado_salud WHERE id_formulario = $id";
    $result = mysqli_query($conn, $query);
    if (!$result){

        die("Fallido");
    }

    header("Location:index.php"); 


}

if (isset($_GET['id1'])){
    $id = $_GET['id1'];
    $query = "DELETE FROM examenes WHERE id_examen = $id";
    $result = mysqli_query($conn, $query);
    if (!$result){

        die("Fallido");
    }

    header("Location:index.php"); 


}
?>