<?php
include 'dbconn.php';

function getdistrict(){
    global $conn;
    $sql="SELECT * FROM district ORDER BY name";
    $check=$conn->query($sql);
    $checked=$check->fetchAll();
    return $checked;
}

function getuserdata($id){
    global $conn;
    $sql="SELECT * FROM users WHERE $id = id ";
    $check=$conn->query($sql);
    $checked=$check->fetchAll();
    return $checked;
}
function address($id){
    global $conn;
    $sql="SELECT address_name FROM district_address WHERE $id = id ";
    $check=$conn->query($sql);
    $checked=$check->fetchAll();
    return $checked;
}
function landlords(){
    global $conn;
    $sql="SELECT id,name,lname FROM users WHERE acc_type = 'landlord' ";
    $check=$conn->query($sql);
    $checked=$check->fetchAll();
    return $checked;
}

function prop($id){
    global $conn;
    $sql="SELECT property.id,property.name as pname,rentORsale,no_of_rooms,available_rooms,cost,district_address.address_name,users.name as uname,users.lname FROM property
    INNER JOIN district_address ON district_address.id=property.location 
    INNER JOIN users ON users.id=property.owner_id WHERE property.id=$id";
    $check=$conn->query($sql);
    $checked=$check->fetchAll();

    // $sqlf="SELECT feature FROM features WHERE property_id=$id";
    // $check2=$conn->query($sqlf);
    // $checked2=$check2->fetchAll();

    $g=[];
    foreach($checked as $tests){
        $id=$tests['id'];
        $sqlf="SELECT feature FROM features WHERE property_id=$id";
        $check2=$conn->query($sqlf);
        $checked2=$check2->fetchAll();
        $h=[];
        if(count($checked2)>0){
            foreach($checked2 as $fe){
                array_push($h,$fe['feature']);
            }   
        }
        $final=array($h);
      array_push($tests,$final);
     array_push($g,$tests);
    }
    // property.id = $id 

    return $g;
}


?>