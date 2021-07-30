
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>form-login</title>
</head>
<body>
    <table cellpadding="5" cellspacing="10">
        <h3>Login Form using session and cookies wit remember Me</h3>
        <form action="validate.php" method="post">
            <tr>
                <th>Email</th>
                <td>
                    <input type="text" name="email" id="email">
                </td>
            </tr>
            <tr>
                <th>Password</th>
                <td>
                    <input type="password" name="password" id="pass">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="remember" value="1"> Remember Me
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="login" name="login">
                </td>
            </tr>
        </form>
    </table>
<script src="script.js"></script>
</body>
</html>
<?php
    if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];
        echo "<script>
                 alert('your email is $email');
                 document.getElementById('email').value = '$email';
                 document.getElementById('pass').value = '$pass';
              </script>";
    }
?>