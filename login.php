<?php 

session_start();
include('connection.php');


if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query="SELECT * FROM user_authentication WHERE user_name='$username' AND user_pass= '$password' ";
    $data= mysqli_query($conn, $query);
    $total= mysqli_num_rows($data);
    echo "$total";

    if ($total==1 ){
        $_SESSION['user_name']= $username;
        header('location:index.php');   //dashboard mainnn
    }
    else{
        echo"Login failed";

    }

}


?>