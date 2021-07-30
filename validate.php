<?php

   $myemail = "ngocbao089@gmail.com";
   $mypass = "12345";

   if(isset($_POST['login'])) {
       $email = $_POST['email'];
       $pass = $_POST['password'];
       if ( $email == $myemail and $pass == $mypass ) {
            if( isset($_POST['remember']) ) { 
                setcookie('email',$email,time()+3600*7);
                setcookie('pass',$pass, time()+3600*7);
            }
            session_start();
            $_SESSION['email'] = $email;
            header("location: welcome.php");
       } else {
           echo "Email or Password is Invailid.<br> click here to <a href='login.php'>try again</a>";
       }
   } else {
       header("location: login.php");
   }
?>