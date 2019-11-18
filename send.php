<?php
session_start();
include 'index.php';
include 'dbh.php';
$msg=$_POST['msg'];
$name=$_SESSION['name'];
//$uid=$_SESSION['id'];


$sql="insert into posts(msg,name,user_id) values('$msg', '$name', ".$_SESSION['id'].")";
$result=$conn->query($sql);
header("Location:home.php");



?>