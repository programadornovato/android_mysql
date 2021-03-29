<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include_once 'conexion.php';
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $query="UPDATE usuarios SET nombre='".$nombre."',telefono='".$telefono."',telefono='".$telefono."',email='".$email."',pass='".$pass."' WHERE id='".$id."'";
    $resultado=$mysql->query($query);
    if($mysql->affected_rows>0 && $resultado==true){
        echo "El usuario se edito exitosamente";

    }else{
        echo "Error al editar usuario";
    }
    $mysql->close();
}