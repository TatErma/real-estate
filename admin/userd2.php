<?php
include "dbconn.php";
$district=$_POST["districts"];
$address=$_POST["address"];
$acc_type=$_POST["acctype"];

$y=array();

global $conn;
$sql="SELECT users.id AS theid,name,username,phone_number,email,district_address.address_name,acc_type FROM users
INNER JOIN district_address ON district_address.id=users.address_id WHERE users.id > 0 ";
 

if($acc_type!==""){
    $sql= $sql." AND users.acc_type='$acc_type'";
}
if($district!==""){
    $sql=$sql." AND district_address.district_id='$district'";
    // $sql2="SELECT * FROM district_address WHERE district_id=$district";
    // $check2=$conn->query($sql2);
    // $checked2=$check2->fetchAll();
    // array_push($y,$checked2);   
}
if($address!==""){
    $sql=$sql." AND district_address.id='$address'";
}

    $check=$conn->query($sql);
    $checked=$check->fetchAll();
    foreach($checked as $checktt){
        $y[]=array(
            "empty"=>"",
            "names"=>$checktt['name'],
            "username"=>$checktt['username'],
            "phone"=>$checktt['phone_number'],
            "address"=>$checktt['address_name'],
            "email"=>$checktt['email'],
            "acc_type"=>$checktt['acc_type'],
            "buttons"=>"<span class='action-edit'><i class='feather icon-edit'></i></span>
            <span class='action-delete'><i class='feather icon-trash'></i></span>"
       
        );
    };


    $output = array(
        // "draw" => 1,
        "recordsTotal"=> count($checked),
        "recordsFiltered"=> count($checked),
        "data"=>$y
    );
//    $output="'data':$y";
//    json_encode
    // die(var_dump($dat));
   echo json_encode($output);

    

    
?>
