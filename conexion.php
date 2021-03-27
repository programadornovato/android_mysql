<?php
$mysql=new mysqli("localhost","root","","android_mysql");
if($mysql->connect_error){
    die("Error de conexion");
}
else{
    echo "Conexion exitosa";
}