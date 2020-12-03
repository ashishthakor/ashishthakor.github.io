<?php
include('dbConnection.php');

$email = $_POST['your_email'];
$passwrd = $_POST['your_pass'];

$find_email = "SELECT * FROM register WHERE email = '$email'";
$query = mysqli_query($con, $find_email);

$email_count = mysqli_num_rows($query);

if ($email_count) {
    $email_pass = mysqli_fetch_assoc($query);
    $userpassword = $email_pass['pwd'];
    $varifiedpass = password_verify($passwrd, $userpassword);
    if ($varifiedpass) {
        $_SESSION['name'] = $email_pass['name'];
        echo 'okey welcome man';
        
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
            alert('Enter right Password');
            location.replace('login.php');
        </script>
        <?php
    }
}
else {
    ?>
        <script>
            alert('User Not Found Please Register');
            location.replace('login1.php');
        </script>
        <?php
}




/*include('dbConnection.php');

$email = $_POST['your_email'];
$passwrd = $_POST['your_pass'];

$find_email = "SELECT * FROM register WHERE email = '$email'";
$query = mysqli_query($con, $find_email);

$email_count = mysqli_num_rows($query);

if ($email_count) {
    //$email_pass = mysqli_fetch_assoc($query);
    $dbpass = "SELECT pwd FROM register WHERE email = '$email'";
    //$userpassword = $email_pass['pwd'];
    $varifiedpass = password_verify($passwrd, $dbpass);
    if ($varifiedpass) {
        $_SESSION['name'] = $email_pass['name'];
        echo "okey welcome man";
        // header("index.php");
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
            alert('Enter right Password');
            location.replace('login.php');
        </script>
        <?php
    }
}
else {
    ?>
        <script>
            alert('User Not Found Please Register');
            location.replace('login1.php');
        </script>
        <?php
}


*/
?>