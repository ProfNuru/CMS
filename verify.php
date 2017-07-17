<?php
if(isset($_POST['login'])){
    $userName = $_POST['username'];
    $pwd = $_POST['password'];
    //connect to database
    define('USER', 'web');
    define('HOST', 'localhost');
    define('PWD', 'nuru');
    $connection = mysql_connect(HOST,USER,PWD);
    if(!$connection){
        die("Database connection failed: ".mysql_error());
    }
    $db = mysql_select_db("newCMS", $connection);
    if(!$db){
        die("Database selection failed: ".mysql_error());
    }
    $query = "SELECT * FROM students;";
    $student_set = mysql_query($query, $connection);
    while($row = mysql_fetch_array($student_set)){
        if($row["user_name"] == $userName && $row["password"] == $pwd){
            header("Location: content.php");
            exit;
        }
    }
    header("Location: login.php");
    exit;
}
mysql_close($connection);
?>