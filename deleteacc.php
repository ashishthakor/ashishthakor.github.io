<?php 
    include('dbConnection.php');
    $email = $_GET['em'];
    $query = "DELETE FROM register WHERE register.email = '$email'";

    $data = mysqli_query($con,$query);

    if($data){
        echo "<font color='green'>delete successfully";
    ?>
    <script>
        location.replace('index.php');
    </script>
    <?php
    }
    else{
        echo "<font color='red'>Error! ";
        ?>
        <script>
            location.replace('index.php');
        </script>
        <?php
    }
?>