<?php
include "dbconn.php";

if(isset($_POST['lineuser'])){
$sql="SELECT * FROM users WHERE acc_type='customer' OR acc_type='agent' OR acc_type='landlord'";
$check=$conn->query($sql);
$checked=$check->fetchAll();
// $row=count($checked);
$empty=array();
for ($i=0; $i < count($checked); $i++) { 
  $final=strtotime($checked[$i]['created_at']);
  array_push($empty,date("m",$final));  
}
echo json_encode(array_count_values($empty));
}

if(isset($_POST['linerevenue'])){
    $sql="SELECT property_id,sold_on,property.cost FROM revenue 
    INNER JOIN property ON property.id=revenue.property_id";
    $check=$conn->query($sql);
    $checked=$check->fetchAll();
    // $row=count($checked);
    $empty=array();
    $total=0;
    for ($i=0; $i < count($checked); $i++) { 
      $final=strtotime($checked[$i]['sold_on']);
      array_push($empty,date("m",$final));  
      $total=$total+$checked[$i]['cost'];
    }
    $final=[];
    array_push($final,$total,array_count_values($empty));
    echo json_encode($final);
    }

    if(isset($_POST['revenueuser'])){
      $sql="SELECT property_id,sold_on,property.cost FROM revenue 
      INNER JOIN property ON property.id=revenue.property_id";
      $check=$conn->query($sql);
      $checked=$check->fetchAll();
     
      echo json_encode($checked);
      }
?>