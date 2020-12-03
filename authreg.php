<?php
        session_start();
        include('dbConnection.php');  
        
            $name = $_POST['name'];
            $email = $_POST['email'];

            $pass = $_POST['pwd'];

            $getquery = "SELECT * FROM register WHERE email = '$email'";
            $res = mysqli_query($conn,$getquery);
            $no = mysqli_num_rows($res);
            if ($no) {
                ?>
                <script>
                    alert("Email Id Alredy Exist");
                    location.replace("login.php");
                </script>
                <?php

            }
            else {
                $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
                $query = "INSERT INTO `register`(`name`, `email`, `pwd`)
                 VALUES ('$name', '$email', '$hashedpass')";
                mysqli_query($con, $query);
                ?>
                <script>
                    alert("user added");            
                </script>
                <?php
                $_SESSION['name'] = $name;
                ?>
                <script>
                location.replace("index.php");</script>
                <?php
                

            }
        

    ?>