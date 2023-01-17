<?php
// install flutter dev server
include 'dbconn.php';

$date=date("y-m-d h:i:s");

if(isset($_POST["steps"])){   
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $pnum=$_POST['pnum'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $addr=$_POST['addressid'];
    $username=$_POST['username'];
    $usertype=$_POST['acc_type'];
    $password=$_POST['pass'];

    $sql1="SELECT * FROM users WHERE '$username' = username or '$email' = email";
    $check1=$conn->query($sql1);
    $checked1=$check1->fetchAll();
    if(empty($checked1)){
        $sql="INSERT INTO users(name,lname,username,gender, email,address_id,password, acc_type, created_at,phone_number )
        VALUES('$name','$lname','$username','$gender','$email','$addr','$password','$usertype','$date','$pnum')";
        $conn->exec($sql);
        $return_id=$conn->lastInsertId();
        echo json_encode("User registered");
    }else{
        echo json_encode($_POST);
    }
    
}
if(isset($_POST["register"])){
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $any=$_POST['any'];
    $pnum=$_POST['pnum'];
    $password=$_POST['pass'];
    $usertype=$_POST['acc_type'];

    $did=$_POST['districtid'];
    $addr=$_POST['address'];
    
    // die(var_dump($_POST));

    
    global $conn;
    $sql3="INSERT INTO district_address(district_id,address_name )
    VALUES('$did','$addr')";
    $conn->exec($sql3);
    $return_id3=$conn->lastInsertId();

    $sql1="SELECT * FROM users WHERE '$username' = username ";
    $check1=$conn->query($sql1);
    $checked1=$check1->fetchAll();

    $sql2="SELECT * FROM users WHERE '$email' = email";
    $check2=$conn->query($sql2);
    $checked2=$check2->fetchAll();

        if(empty($checked1) && empty($checked2)){
            $sql="INSERT INTO users(name,lname,username,gender, email,address_id,password, acc_type, created_at,phone_number )
            VALUES('$name','$lname','$username','$gender','$email','$return_id3','$password','$usertype','$date','$pnum')";
            $conn->exec($sql);
            $return_id=$conn->lastInsertId();
            header("location: ". $_SERVER['HTTP_REFERER']."?id=User Added");
        }elseif(empty($checked1) && !empty($checked2)){
            header("location:".$_SERVER['HTTP_REFERER']."?id=Email already in use");
        
        }
        elseif(!empty($checked1) && empty($checked2)){
            header("location:".$_SERVER['HTTP_REFERER']."?id=username Exists");
        
        }
        elseif(!empty($checked1) && !empty($checked2)){
            header("location:".$_SERVER['HTTP_REFERER']."?id=already a user");
        
        }
       
  
}


if(isset($_POST["login"])){
    
    $username=$_POST['username']; 
    $password=$_POST['password'];
    
    global $conn;
    $sql="SELECT * FROM users WHERE username ='$username' AND password  ='$password' OR email ='$username' AND password  ='$password'";
    $check=$conn->query($sql);
    $checked=$check->fetchAll();
    $row=count($checked);
    // die(var_dump($row));
    
   
    // die(var_dump($checked[0][0]));

    if($row > 0 ){
        session_start();
        $_SESSION['id']=$checked1[0][0];
        header("location:index.php");   
    }else{
        header("location:auth-login.php?mess=password and username does not match");
    }

}

if(isset($_POST["adduser"])){
    $username=$_POST['username']; 
    $password=$_POST['password'];
    
    global $conn;
    $sql="SELECT * FROM users WHERE username ='$username' AND password  ='$password' OR email ='$username' AND password  ='$password'";
    $check=$conn->query($sql);
    $checked=$check->fetchAll();
    $row=count($checked);
    // die(var_dump($row));
    
   
    // die(var_dump($checked[0][0]));

    if($row > 0 ){
        session_start();
        $_SESSION['id']=$checked1[0][0];
        header("location:index.php");   
    }else{
        header("location:auth-login.php?mess=password and username does not match");
    }

}

if(isset($_POST["adddistr"])){
    $district=$_POST['dname']; 
    $longitude=$_POST['lon'];
    $latitude=$_POST['lat'];

    $sql0="SELECT * FROM district WHERE name ='$district' AND longitude='$longitude' AND latitude='$latitude' ";
    $check0=$conn->query($sql0);
    $checked0=$check0->fetchAll();
    $row=count($checked0);

    if($row==0){
    global $conn;
    $sql="INSERT INTO district(name,longitude,latitude)
    VALUES('$district','$longitude', '$latitude')";
    $conn->exec($sql);
    $return_id=$conn->lastInsertId();
    header("location:regd.php");
}else{
    header("location:regd.php?mess=District has been registered"); 
};
}


if(isset($_POST["districts1"])){
    $district=$_POST["districts1"]; 
    $longitude=$_POST["long"];
    $latitude=$_POST["lati"];
    global $conn;

    $sql0="SELECT * FROM district WHERE name ='$district' AND longitude='$longitude' AND latitude='$latitude' ";
    $check0=$conn->query($sql0);
    $checked0=$check0->fetchAll();
    $row=count($checked0);
    
    if($row==0){
        $sql="INSERT INTO district(name,longitude,latitude)
        VALUES('$district','$longitude', '$latitude')";
        $conn->exec($sql);
        $return_id=$conn->lastInsertId();
        echo (0);
    }else{
        echo (1);
    }
   
    
}

if(isset($_POST["districtidd"])){
    $district=$_POST["districtidd"]; 
    $add=$_POST["Address"];
   
    global $conn;

    $sql0="SELECT * FROM district_address WHERE district_id='$district' AND address_name='$add' ";
    $check0=$conn->query($sql0);
    $checked0=$check0->fetchAll();
    $row=count($checked0);
    
    if($row==0){
        $sql="INSERT INTO district_address(district_id,address_name)
        VALUES('$district','$add')";
        $conn->exec($sql);
        $return_id=$conn->lastInsertId();
        echo(0);
    }else{
        echo(1);
    }
   
    
}

if(isset($_POST["districtid"])){
  
    if($_POST["districtid"]==''){
        echo json_encode('empty');
    }else{
        $id=$_POST["districtid"]; 
        global $conn;
        $sql="SELECT * FROM district_address WHERE $id = district_id ";
        $check=$conn->query($sql);
        $checked=$check->fetchAll();
        echo json_encode($checked);
       
    }
    
   
}

if(isset($_POST["deleteid"])){
    $id=$_POST["deleteid"];
    echo $id;
   
}
if(isset($_POST["addprop"])){
    global $conn;
    $name=$_POST["propname"]; 
    $propownr=$_POST["propowner"]; 
    $propdistr=$_POST['propdistrict'];
    $propaddr=$_POST['propaddress'];
    $SorR=$_POST['SR']; 
    $noorooms=$_POST['NR'];
    $available=$_POST['AR'];
    $cost=$_POST['cost'];
    $features=$_POST['hh'];
    
    $sql2="INSERT INTO district_address(district_id, address_name)
    VALUES('$propdistr', '$propaddr')";
    $conn->exec($sql2);
    $return_id2=$conn->lastInsertId();
    
   
    $sql="INSERT INTO property(owner_id, name, location, district_id, rentORsale, no_of_rooms, available_rooms, cost, created_at )
    VALUES('$propownr', '$name', '$return_id2' ,'$propdistr','$SorR','$noorooms','$available','$cost', '$date')";
    $conn->exec($sql);
    $return_id=$conn->lastInsertId();


    foreach($features as $fet){
        $sql3="INSERT INTO features(property_id,feature)
        VALUES('$return_id','$fet')";
        $conn->exec($sql3);
        $return_id3=$conn->lastInsertId();
    }
    

    // die(var_dump(empty($checked)));
    header("location:addp.php");
    
        
}

if(isset($_POST['propfetch'])){
    $district=$_POST['dis'];
    $address=$_POST['add'];
    $rentorsale=$_POST['rors'];
    $owner=$_POST['own'];
    $search=$_POST['search'];

    $sql="SELECT property.id,property.name as pname,rentORsale,no_of_rooms,available_rooms,cost,district_address.address_name,users.name as uname,users.lname FROM property
     INNER JOIN district_address ON district_address.id=property.location 
     INNER JOIN users ON users.id=property.owner_id WHERE property.id > 0 ";


if($district!==""){
    $sql= $sql." AND '$district'=district_address.district_id";
}
if($address!==""){
    $sql=$sql." AND '$address'=property.location";  
}
if($rentorsale!==""){
    $sql=$sql." AND '$rentorsale'=property.rentORsale";
}
if($owner!==""){
    $sql=$sql." AND '$owner'=property.owner_id";
}
if($search!==""){
   $sql=$sql." AND property.name like '%$search%'"; 
}

    $check=$conn->query($sql);
    $checked=$check->fetchAll();
    echo json_encode($checked);
    // die(var_dump($checked))
}

if(isset($_POST["check"])){
    $id=$_POST['thedist'];
    $search=$_POST['search'];
    $y=[];
    $sql="SELECT * FROM district_address WHERE district_id='$id' ORDER BY address_name ASC";
    $sql2="SELECT * FROM district WHERE id='$id' ";


    if($search!==""){
       $sql=substr_replace($sql," AND address_name like '%$search%' ",54,0);  
    }

    $check=$conn->query($sql);
    $checked=$check->fetchAll();

    $check2=$conn->query($sql2);
    $checked2=$check2->fetchAll();

    

    array_push($y,$checked2,$checked);
     
    echo json_encode($y);

}

if(isset($_POST['distval'])){
    $id=$_POST['distval'];
    $type=$_POST['type'];
     if($type=="district"){
        $sql="DELETE FROM district WHERE id=$id ";
        $check=$conn->query($sql);
       
        $sql2="DELETE FROM district_address WHERE district_id=$id ";
        $check2=$conn->query($sql2);
     }else{
        $sql3="DELETE FROM district_address WHERE id=$id ";
        $check3=$conn->query($sql3); 
     }
}

if(isset($_POST['values'])){
    $id=$_POST['values'];
    $type=$_POST['type'];
    $arr=$_POST['arr'];

    if($type=="district"){
        $query = "UPDATE district SET name = '$arr[0]' , longitude = '$arr[1]', latitude='$arr[2]' WHERE id=$id";
        $conn->query($query);
        
    }else{
        $query = "UPDATE district_address SET address_name = '$arr[0]' WHERE id=$id";
        $conn->query($query);
    }
}

if(isset($_POST['userval'])){
    $id=$_POST['userval'];
    $sql2="DELETE FROM users WHERE id=$id ";
    $check2=$conn->query($sql2);
}

if(isset($_POST['iduser'])){
    $id=$_POST['iduser'];
    
    $sql1="SELECT district_address.district_id,district_address.id,users.gender FROM users 
    INNER JOIN district_address ON users.address_id=district_Address.id
    WHERE $id = users.id ";
    $check1=$conn->query($sql1);
    $checked1=$check1->fetch();

    $sql="SELECT * FROM district_address  WHERE district_id=$checked1[0] ";
    $check=$conn->query($sql);
    $checked=$check->fetchAll();

    $final=[];
    array_push($final,$checked,$checked1[1],$checked1[2]);
    echo json_encode($final);
}
if(isset($_POST['realid'])){
    $id=$_POST['realid'];
    $sql="SELECT * FROM district_address  WHERE district_id=$id";
    $check=$conn->query($sql);
    $checked=$check->fetchAll();

    echo json_encode($checked);
}
if(isset($_POST['upduser'])){
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $mail=$_POST['mail'];
    $acc=$_POST['acc'];
    $gender=$_POST['gender'];
    $id=$_POST['id'];

    $query = "UPDATE users SET name= '$name' , lname='$lname',username='$username',phone_number='$number',
    address_id='$address',email='$mail',acc_type='$acc'
    WHERE id=$id";
    $conn->query($query);

    echo ("User updated");
}


?>