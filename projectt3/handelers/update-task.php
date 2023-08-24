<?php
session_start();
//connection
$con=mysqli_connect("localhost","root","","todoapp");
//error
if(!$con){
    $_SESSION['errors']="connection error" . mysqli_connect_error($con);
}

//check on the data and method
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['title'])){
    //validation
    $title=trim(htmlspecialchars(htmlentities($_POST['title'])));
    $id=$_GET['id'];
}

if(empty($_SESSION['errors'])){
    $sql="UPDATE `tasks` SET `title`='$title' WHERE `id`='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        $_SESSION['success']="Data updated successfully";
    }else{
        header("location:../design/update.php?id=$id");
        die;
    }

    //redirection
    header("location:../design/index.php");
}

?>

