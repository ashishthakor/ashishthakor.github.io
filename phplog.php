<?php
session_start();
include('dbConnection.php');

$email = $_POST['your_email'];
$password = $_POST['your_pass'];

$find_email = "SELECT * FROM register WHERE email = '$email'";
$query = mysqli_query($con, $find_email);

$email_count = mysqli_num_rows($query);

if ($email_count) {
    $email_pass = mysqli_fetch_assoc($query);
    $realpwd = $email_pass['pwd'];
    if ($realpwd == $password) {
        $_SESSION['name'] = $email_pass['name'];
        echo 'welcome to Traversa, You are redirecting to home page.';
        
        ?>
        
        <script>
            alert("Login success...")
            location.replace('index.php');
        </script>
        <?php
    }
    else {
        ?>
        <script>
            alert('Ooops! Wrong Password or This email belong to someone else');
            location.replace('login.php');
        </script>
        <?php
    }
}
else {
    ?>
        <script>
            alert('User Not Found in database. Please Register First');
            location.replace('login1.php');
        </script>
        <?php
}

?>