<?php session_start();
//connection
$con=mysqli_connect("localhost","root","","todoapp");
//error
if(!$con){
    echo "connection error" . mysqli_connect_error($con);
}


//check on the data and method
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['title'])){
    //validation
    $title=trim(htmlspecialchars(htmlentities($_POST['title'])));
    //query
    $sql="INSERT INTO `tasks`(`title`) VALUES('$title')";
    $result=mysqli_query($con,$sql);

    if(mysqli_affected_rows($con)==1){
        $_SESSION['success']="Data inserted successfully";
    }

    //redirection
    header("location:../design/index.php");
}



?>