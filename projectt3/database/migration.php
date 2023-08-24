<?php  
//connection
$con = mysqli_connect("localhost","root","");

//in case there is an error
if(!$con){
    echo "connection error " . mysqli_connect_error($con);
}

//query
$sql="CREATE DATABASE IF NOT EXISTS todoapp";
//to implement the query
$result=mysqli_query($con,$sql);
mysqli_close($con);

//to create tables
$con = mysqli_connect("localhost","root","","todoapp");

//in case there is an error
if(!$con){
    echo "connection error " . mysqli_connect_error($con);
}

//query
$sql="CREATE table IF NOT EXISTS `tasks`(
    `id` INT PRIMARY KEY AUTO INCRIMINT,
    `title` VARCHAR(200) NOT NULL
) ";
//to implement the query
$result=mysqli_query($con,$sql);
mysqli_close($con);



?>


   