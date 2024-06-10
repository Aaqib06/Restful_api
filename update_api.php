<?php
include "config.php";
header('content-type:application/json');
header('access-control-allows-origin:*');
header('access-control-allows-method:PUT');
header('access-control-allows-headers:access-control-allows-headers,content-type,access-control-allows-method,authorization');

$data=json_decode(file_get_contents("php://input"),true);

$id=$data['id'];
$name=$data['name'];
$email=$data['email'];
$address=$data['address'];
$phone=$data['phone'];


$sql="update employees set name='$name',email='$email',address='$address',phone='$phone' where id='$id'";

if($conn->query($sql)){
    echo json_encode(['message'=>" task updataed successfully",'status'=>"true"]);
}else{
    
    echo json_encode(['message'=>" task not updataed ",'status'=>"false"]);
}





?>