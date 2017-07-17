<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="reg.css" type="text/css">
    <title>Student CMS Registeration</title>
</head>
<body>
    <div id="wrapper">
       <div id="heading">
           <h1>CMS REGISTERATION</h1>
       </div>
        <form action="addstudent.php" method="POST">
            <p class="form-item">First name: <input type="text" name="firstname" value=""/></p>
            <p class="form-item">Last name: <input type="text" name="lastname" value=""/></p>
            <p class="form-item">Username: <input type="text" name="username" value=""/></p>
            <p class="form-item">E-mail: <input type="text" name="email" value=""/></p>
            <p class="form-item">Password: <input type="password" name="password" value=""/></p>
            <p class="form-item">Re-enter Password: <input type="password" value=""/></p>
            <input id="reg-btn" type="submit" name="submit" value="Register"/>
        </form>
    </div>
</body>
</html>