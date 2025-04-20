<?php
$host="localhost";
$user="root";
$pass="";
$db= "login";

$db2 = "review";

$db3= "price";

$conn=new mysqli($host,$user,$pass,$db);
$conn1=new mysqli($host,$user,$pass,$db2);
$conn2=new mysqli($host,$user,$pass,$db3);



if($conn->connect_error){
    die("Connection failed!!!".$conn->connect_error);
}
if($conn1->connect_error){
    die("Connection failed!!!".$conn1->connect_error);
}
if($conn2->connect_error){
    die("Connection failed!!!".$conn2->connect_error);
}

?>