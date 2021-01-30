<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">   
    <link rel="shortcut icon" type="image/png" href="images/icon.png"> 
    <title>Sign In Page</title>
</head>
<body>
        <form class="box" action="validation.php" method="post">
        <h1>Sign In</h1>
        <input type="text" placeholder="Email" name="email" required="">
        <input type="password" placeholder="Password" name="pass" required="">
        <input type="submit" name="login" value="Login">        
        <p>Not a member?</p>
        <a href="signup.php">Sign Up</a>
        </form>             
</body>
</html>