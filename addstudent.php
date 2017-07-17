<?php
if(isset($_POST['submit'])){
    // Capture post values
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    echo "{$firstName} <br/> {$lastName} <br/> {$userName} <br/> {$pwd}";
    
    //connect to MYSQL
    define('HOST', 'localhost');
    define('USER', 'web');
    define('PWD', 'nuru');
    $connection = mysql_connect(HOST,USER,PWD);
    if(!$connection){
        die("Database connection failed: ".mysql_error());
    }
    //select database
    $db = mysql_select_db('newCMS', $connection);
    if(!$db){
        die("Database selection failed: ".mysql_error());
    }else{
        $query = "INSERT INTO students VALUES(NULL,'{$firstName}','{$lastName}','{$pwd}','{$email}','{$userName}');";
        if(!mysql_query($query,$connection)){
            die("query failed: ". mysql_error());
        }else{
            header("Location: login.php");
            exit;
        }
    }
    //query database
    
   /* if(!$result){
        die("Query failed: ".mysql_error());
    }else{
        
    }*/
    
}else{
    header("Location: registeration.php");
    exit;
}
mysql_close($connection);
?>