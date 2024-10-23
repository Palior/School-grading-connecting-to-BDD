<?php
$nombre=$_POST['nombre'];
$materia=$_POST['materia'];
$nota=$_POST['nota'];
$ingresar=$_POST['ingresar']
if($nombre!='' && $materia!='' && $nota!=''){
$user="root";
$password='';
$bd="Notas";
$host="localhost";
$result=NULL;
$mysqli = new mysqli($host, $user, $password, $bd);
if($mysqli!=NULL) {
if($ingresar == 'ingresar') {
$query = "insert into notas values('" . $nombre . "', '" . $materia . "', '" . $nota . "')";
}
}else{
echo "No se pudo realizar la conexion con el servidor";
}
?>