<?php
include "config.php";
header('content-type:application/json');
header('access-control-allows-origin:*');
header('access-control-allows-method:POST');
header('access-control-allows-headers:access-control-allows-headers,content-type,access-control-allows-method,authorization');

$data=json_decode(file_get_contents("php://input"),true);
$name=$data['name'];
$email=$data['email'];
$address=$data['address'];
$phone=$data['phone'];


$sql="insert into employees (name,email,address,phone) values ('$name','$email','$address','$phone')";

if($conn->query($sql)){
    echo json_encode(['message'=>"data inserted " ,'status'=>"true"]);
}else{
    echo json_encode(['message'=>"data not insertted "]);
}









?>