<?php


include "config.php";
header('content-type:application/json');
header('access-control-allows-origin:*');
header('access-control-allows-method:DELETE');
header('access-control-allows-headers:access-control-allows-headers,content-type,access-control-allows-method,authorization');
$data=json_decode(file_get_contents("php://input"),true);
$id=$data['id'];

$sql="delete from employees where id= $id";

if($conn->query($sql)){
    echo json_encode(['message'=>" task deleted successfully",'status'=>"true"]);
}else{
    
    echo json_encode(['message'=>" task not deleted ",'status'=>"false"]);
}




?>