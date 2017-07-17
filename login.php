<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css" type="text/css">
    <title>Student CMS Registeration</title>
</head>
<body>
    <div id="wrapper">
       <div id="heading">
           <h1>STUDENT CMS LOGIN</h1>
       </div>
        <form action="verify.php" method="POST">
            <p class="form-item">Username: <input type="text" name="username" value=""/></p>
            <p class="form-item">Password: <input type="password" name="password" value=""/></p>
            <input id="reg-btn" type="submit" name="login" value="Login"/>
            <a href="registeration.php">Register now</a>
        </form>
    </div>
</body>
</html>