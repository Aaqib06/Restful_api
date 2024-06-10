<?php
include "config.php";
header('content-type:application/json');
header('access-control-allows-origin:*');


$sql="select * from employees";
$result=$conn->query($sql);

if(mysqli_num_rows($result)>0){
    // $data=array();
    // while($row=mysqli_fetch_assoc($result)){
    $total=mysqli_fetch_all($result,MYSQLI_ASSOC);
        // $data=$row;
    
    echo json_encode($total);
}else{
    echo json_encode(['message'=>" task error"]);
}



?>