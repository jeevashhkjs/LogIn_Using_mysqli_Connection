<?php

if(!isset($_GET['submit']))
{
    $name = $_GET['firstName'];
    $psd = $_GET['psd'];

    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $passdw = $_GET['passdw'];
    $repassdw = $_GET['repassdw'];

    $con = mysqli_connect("localhost","root","welcome","datas");

    if($con->connect_error){
        echo "connection error";
    }
    else{
        echo "Connection succesfully";
    }

    $sql = "INSERT INTO logIn (name,passwrd) values ('$name','$psd')";

    $sqls = "INSERT INTO register (name,lname,passwd,repasswd) values ('$fname','$lname','$passdw','$repassdw')";
    $del = "DELETE FROM register where name = ''";
    $dele = "DELETE FROM logIn where name = ''";
    if($con->query($sql) === TRUE){
        echo "Recoreded Succesfully";
    }
    else{
        echo "Connection not ok" ;
    }

    if($con->query($sqls) === TRUE){
        echo "Recoreded Succesfully";
    }
    else{
        echo "Connection not ok" ;
    }
    if($con->query($del) === TRUE){
        echo "deleted succesful";
    }
    else{
        echo "Connection not ok" ;
    }
    if($con->query($dele) === TRUE){
        echo "deleted";
    }
    else{
        echo "Connection not ok" ;
    }
}
else{
    echo "Please enter values" ;
}
?>