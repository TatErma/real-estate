<?php
include 'dbconn.php';
if(isset($_POST["id"])){
    $id=$_POST["id"];
    $query = "DELETE FROM users WHERE id=$id";
    $conn->query($query);

}

if(isset($_POST["adduser"])){
    $fname=$_POST['fname-column'];
    $lname=$_POST['lname-column'];
    $username=$_POST['username'];
    $password=$_POST['city-column'];
    $email=$_POST['email-id-column'];
    $usertype=$_POST['acc_type'];
    $phone=$_POST['phone'];
    $district=$_POST['district'];

    global $conn;
    $sql1="SELECT * FROM users WHERE '$username' = username ";
    $check1=$conn->query($sql1);
    $checked1=$check1->fetchAll();

    $sql2="SELECT * FROM users WHERE '$email' = email";
    $check2=$conn->query($sql2);
    $checked2=$check2->fetchAll();

    if(empty($checked1) && empty($checked2)){
        $sql="INSERT INTO users(name , lname, username, phone_number, email,password,acc_type )
        VALUES('$fname', '$lname','$username','$phone','$email','$password','$usertype')";
        $conn->exec($sql);
        $return_id=$conn->lastInsertId();
        header("location:login.php");
        // die(var_dump('freespace'));
    }elseif(empty($checked1) && !empty($checked2)){
        // header("location:Register.php?id=Email already in use");
        // // die(var_dump('user exists'));
    
    }
    elseif(!empty($checked1) && empty($checked2)){
        // header("location:Register.php?id=username Exists");
        // // die(var_dump('user exists'));
    
    }
    elseif(!empty($checked1) && !empty($checked2)){
        // header("location:Register.php?id=already a user");
        // // die(var_dump('user exists'));
    
    }
    
}


?>