<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    
    
    include('dbConnection.php');
    /*if($con){
        echo 'Connection Established SuccessFully';
    }
    else{
        echo 'Error !';
    }*/

    $query = "INSERT INTO `register`(`name`, `email`, `pwd`, `cpwd`) VALUES ('$name','$email','$pwd','$cpwd')";

    $run = mysqli_query($con,$query);

    if($run=true){
        echo 'data inserted Successfully';
    }
    else{
        echo "Error !";
    }
?>