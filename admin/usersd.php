<?php
include "dbconn.php";
$district=$_POST["districts"];
$address=$_POST["address"];
$acc_type=$_POST["acctype"];

$y=[];

global $conn;
$sql="SELECT users.id AS theid,name,lname,username,phone_number,district_address.address_name,email,acc_type FROM users
INNER JOIN district_address ON district_address.id=users.address_id WHERE users.id > 0 ";
 

if($acc_type!==""){
    $sql= $sql." AND users.acc_type='$acc_type'";
}
if($district!==""){
    $sql=$sql." AND district_address.district_id='$district'";
    $sql2="SELECT * FROM district_address WHERE district_id=$district";
    $check2=$conn->query($sql2);
    $checked2=$check2->fetchAll();
    array_push($y,$checked2);   
}
if($address!==""){
    $sql=$sql." AND district_address.id='$address'";
}


    $check=$conn->query($sql);
    $checked=$check->fetchAll();
   
    for ($i=0; $i < count($checked) ; $i++) { 
        $btn="<span class='action-edit' title='Edit' data-value='".$checked[$i]['theid']."'><i class='feather icon-edit'></i></span>
        <span class='action-delete del type-warning' title='Delete' data-value='".$checked[$i]['theid']."'><i class='feather icon-trash'></i></span>";
        array_push($checked[$i],$btn);   
    }
    // die(var_dump($checked));
    $z=[];
    array_push($z,$checked,$y);
    echo json_encode($z);


    

    
?>
