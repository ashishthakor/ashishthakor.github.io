<?php
    session_start();
    include('dbConnection.php');       
        
        $fname = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pwd'];
        $getquery = "SELECT * FROM register WHERE email = '$email'";
        $res = mysqli_query($con,$getquery);
        $no = mysqli_num_rows($email);
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
            $query = "INSERT INTO register (fname, email, pwd)
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <script type="text/javascript">
        function validate(){
            var emailRange = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
	        var letters = /^[A-Za-z]+$/; 
	        var fname = document.f1.name.value;
            var femail = document.f1.email.value;
            var fpwd = document.f1.pwd.value;
            var confirmpwd = document.f1.cpwd.value;
//checking for Name
            if( fname == "" ){

	            alert("Name cannot be blank");
	            document.f1.name.focus() ;
	
                return false;
            }
   
            if(!letters.test(fname)){
                
                alert("Name has to be alphabets Only eg; NarendraModi");
                document.f1.name.focus();
                
                return false;
            }
//checking for email
            if (femail == "" ){
                
                alert("Email is Empty");
                document.f1.email.focus();
                
                return false;
            }
            else if(!emailRange.test(femail)){
                
                alert("email format is not valid");
                document.f1.email.focus();
                
                return false;
            }
//checking for Password
            if(fpwd == ""){
                
                alert("Password cannot be blank");
                document.f1.pwd.focus();
                    
                return false;
            }
                
            if(fpwd.length < 8){
                
                alert("Password cannot be less than 8 characters");
                document.f1.pwd.focus();
                return false;
            }
//checking for Confirm Password
            if(fpwd != confirmpwd){
                
                alert("Both password need to be same");
                document.f1.cpwd.focus();
                    
                return false;
            }
            
            return true;
        }
    </script>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts1/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
</head>
<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form name="f1" action="9-a.php" method="POST" class="register-form" id="register-form"  onsubmit="return(validate());">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pwd" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpwd" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images1/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                        <a href="index.php" class="signup-image-link">Home</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="js1/main.js"></script>
</body>
</html>