<?php if(isset($_POST['btn_actualizar'])){
// Informacion enviada por el formulario
$id=trim($_POST['id']);
$nombre=trim($_POST['nombre']);
$apellido=trim($_POST['apellido']);
$edad=trim($_POST['edad']);
$direccion=trim($_POST['direccion']);
$telefono=trim($_POST['telefono']);
$correo=trim($_POST['correo']);


// Actualizar la tabla
include "conexio.php";
$actualizar = "UPDATE usuarios SET nombre=:nombre, apellido=:apellido, edad=:edad, direccion=:direccion, telefono=:telefono, correo=:correo
WHERE idusuario =:id";
$sql = $connect->prepare($actualizar);
$sql->bindParam(':id',$id,PDO::PARAM_INT, 11);
$sql->bindParam(':nombre',$nombre,PDO::PARAM_STR, 45);
$sql->bindParam(':apellido',$apellido,PDO::PARAM_STR, 45);
$sql->bindParam(':edad',$edad,PDO::PARAM_INT,3);
$sql->bindParam(':direccion',$direccion,PDO::PARAM_STR,75);
$sql->bindParam(':telefono',$telefono,PDO::PARAM_STR,15);
$sql->bindParam(':correo',$correo,PDO::PARAM_STR,150);

$sql->execute();

if($sql->rowCount() > 0){
$count = $sql -> rowCount();
    echo  "<script>window.alert('$nombre $apellido ha sido actualizado');</script>";
    // echo  "<script>window.alert('$count registro ha sido actualizado');</script>";
    echo "<script>window.location='consulta.php';</script>";
}else{
    echo "<script>window.alert('No se pudo actualizar');</script>";
    echo "<script>window.location='actualizar.php?id=$id';</script>";
    // print_r($sql->errorInfo()); 
}
}
?>