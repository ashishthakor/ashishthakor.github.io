<?php
        session_start();
        include('db_con.php');       
            $fname = $_POST['fname'];
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
                $query = "INSERT INTO register (fname, email, pass)
                VALUES ('$fname', '$email', '$hashedpass')";
                mysqli_query($conn, $query);
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