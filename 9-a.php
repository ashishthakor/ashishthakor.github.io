<?php
    session_start();
    include('dbConnection.php');       
        
        
        $email = $_POST['email'];
        $pass = $_POST['pwd'];
        $getquery = "SELECT * FROM register WHERE email = '$email'";
        $res = mysqli_query($con,$getquery);
        $no = mysqli_num_rows($res);
        if ($no) {
            ?>
            <script>
                alert("Email Id Alredy Exist");
                location.replace("Login1.php");
            </script>
            <?php
        }
        else {
            $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
            $query = "INSERT INTO register (name, email, pwd)
            VALUES ('$fname',$email','$hashedpass')";
            mysqli_query($con, $query);
            ?>
            <script>
                alert("user added");            
            </script>
            <?php
            $_SESSION['fname'] = $fname;
            ?>
            <script>
            location.replace("index.php");</script>
            <?php
            
        }
?>
