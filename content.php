<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cms.css" type="text/css">
    <title>Students Access Point</title>
</head>
<body>
   <div id="title">
       <h1>CONTENT MANAGEMENT SYSTEM</h1>
   </div>
    <div id="navigation">
       <h2>LOGIN NAME</h2>
        <ul>
           <li><a href="#">COURSES</a></li>
           <li><a href="#">DISCUSSION</a></li>
           <li><a href="#">DASHBOARD</a></li>            
        </ul>
    </div>
    <div id="left-side-bar">
        <h3>Your Courses</h3>
        <?php
        // Connect to MYSQL:
        define('USER', 'web');
        define('HOST', 'localhost');
        define('PWD', 'nuru');
        $connection = mysql_connect(HOST,USER,PWD);
        if(!$connection){
            die("Database connection error: ".mysql_error());
        } 
        // Select Database: 
        $db = mysql_select_db('newCMS',$connection);
        if(!$db){
            die("Database selection error: ".mysql_error());
        } 
        $query = "SELECT * FROM courses;";
        $course_set = mysql_query($query,$connection);
        if(!$course_set){
            die("Database selection error: ".mysql_error());
        } else{
            while($row = mysql_fetch_array($course_set)){
                echo "<ul><li><a href=\"#\" class=\"course-list\">{$row['course_name']}</a></li></ul>";
            }
        }
        ?>
    </div>
    <div id="content-area">
        <?php 
        $query = "SELECT * FROM news ORDER BY news_id DESC;";
        $news_set = mysql_query($query, $connection);
        if(!$news_set){
            die("Database selection error: ".mysql_error());
        }else{
            while($row = mysql_fetch_array($news_set)){
                echo "<h2 class=\"announcement-heading\">{$row['news_subject']}</h2><br/><p class=\"announcement-content\">{$row['news_content']}</p><br/>";
            }
        }
        ?>
        <p>&nbsp;</p>
    </div>
    <div id="right-side-bar">
        <h3>Online students</h3>
        <p>&nbsp;</p>
        <h3>Online instructors</h3>
        <p>&nbsp;</p>
    </div>
</body>
</html>
<?php mysql_close($connection); ?>