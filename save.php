<?php

include("db.php");

if (isset($_POST['save'])){
    $identificacion = $_POST ['identificacion'];
    $nombre = $_POST ['nombre'];
    $genero = $_POST ['genero']; 
    $edad = $_POST ['edad'];
    $correo = $_POST ['correo'];
    $contrasena = $_POST ['contrasena'];

    $query = "INSERT INTO usuario (identificacion,nombre_completo,genero,edad,correo_electronico,contrasena) VALUES ('$identificacion', '$nombre', '$genero', '$edad', '$correo', '$contrasena')";
    $result = mysqli_query($conn, $query);
    if (!$result){

        die("Fallido");
    }

    header("Location:Login.html");
}


if (isset($_POST['guardar'])){
    $identificacion = $_POST['identificacion'];
    $nombre = $_POST['nombre'];
    $genero =$_POST['genero'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $peso = $_POST ['peso'];
    $condicionsalud = $_POST ['condicionsalud'];
    $otracondicion= $_POST ['otracondicionsalud'];
    $frecuencia = $_POST ['frecuencia'];
    $vacunas = $_POST ['vacunas'];
    $tension = $_POST ['tension'];
    $saturacion = $_POST ['saturacion']; 
    $actividad = $_POST ['actividad'];
    $distancia = $_POST ['distancia'];
    $fechacontrol = $_POST ['fechacontrol'];
    $especialista = $_POST ['especialista'];
    $nommedico = $_POST ['nommedico'];
    $causatratamiento = $_POST ['causatratamiento'];
    $tratamiento = $_POST ['tratamiento'];
    $medicamento = $_POST ['medicamento'];
    $observaciones = $_POST ['observaciones'];


    $query = "INSERT INTO estado_salud (identificacion,nombre,genero,edad,correo,peso,condicion_salud,otra_condicion,frecuencia_cardiaca,vacunas,tension_arterial,saturacion_oxigeno,actividad_fisica,distancia_recorrida,fecha_control,especialista,nom_especialista,causa_tratamiento,tratamiento,medicamentos,observaciones) 
    VALUES ('$identificacion','$nombre','$genero','$edad','$correo','$peso', '$condicionsalud', '$otracondicion', '$frecuencia', '$vacunas', '$tension', '$saturacion', '$actividad','$distancia','$fechacontrol','$especialista','$nommedico','$causatratamiento','$tratamiento','$medicamento','$observaciones')";
    $result = mysqli_query($conn, $query);
    if (!$result){

        die("Fallido");
    }

    header("Location:index.php");
}

?>