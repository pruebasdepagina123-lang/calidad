<?php
$host = "localhost";
$usurio = "root";
$contra = "";
$base = "PPROPLAS";

$conn = new mysqli($host, $usurio, $contra, $base);
if ($conn->connect_error) {
    echo "<script> alert('Conexion fallida...'); </script>";
} else {
    echo "<script> alert('Conexion exitosa...'); </script>";
}
$turno = $_POST['turno'];
$inspector = $_POST['inspector'];
$fecha = $_POST['fecha'];
$op = $_POST['op'];
$producto = $_POST['producto'];
$peso = $_POST['peso'];
$inspeccion = $_POST['inspeccion'];
$rebaba = $_POST['rebaba'];
$rechupe = $_POST['rechupe'];
$incompleta = $_POST['incompleta'];
$deforme = $_POST['deforme'];
$quemada = $_POST['quemada'];
$mal_corte = $_POST['corte'];
$burbuja = $_POST['burbuja'];
$desmoldante = $_POST['desmoldante'];
$adelanto = $_POST['adelanto'];
$puntos_negros = $_POST['puntos'];
$contaminado = $_POST['contaminada'];
$operador = $_POST['operador'];
$total_defectos = $_POST['total_defectos'];
$total_revisado = $_POST['total_revisado'];
$sql = "INSERT INTO CALIDAD(Turno,Inspector,Fecha,OP,Producto,Peso,Inspeccion,Rebaba,Rechupe,Incompleta,Deforme,Quemada,Corte,Burbuja,Desmoldante,Adelanto,Puntos,Contaminado,Operador,CDefectos,TRevisado) VALUES('$turno','$inspector','$fecha','$op','$producto','$peso','$inspeccion','$rebaba','$rechupe','$incompleta','$deforme','$quemada','$mal_corte','$burbuja','$desmoldante','$adelanto','$puntos_negros','$contaminado','$operador','$total_defectos','$total_revisado')";
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Los datos se han enviado de manera correcta al administrador...'); </script>";
} else {
    echo "<script> alert('Los datos no se han enviado de manera correcta al administrador...'); </script>";
}
