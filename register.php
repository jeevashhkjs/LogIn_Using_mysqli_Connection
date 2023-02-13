<?php

if(!isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $passdw = $_POST['passdw'];
    $repassdw = $_POST['repassdw'];

    $con = mysqli_connect("localhost","root","welcome","datas");
    $sqls = "INSERT INTO register (name,lname,passwd,repasswd) values ('$fname','$lname','$passdw','$repassdw')";

}

