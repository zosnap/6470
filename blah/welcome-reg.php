<!DOCTYPE html>
<html>
<head>
        <title>
            Travelog
        </title>

        <!--this is a link to the css file you will make-->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
</head>

<body>


<h1>Welcome!</h1><br />
<p>Thank you, you have registered. Now you can <a href = "login.php">Login</a></p>

<?php

mysql_connect("sql.mit.edu", "sherryxy", "6470") or die(mysql_error());
mysql_select_db("sherryxy+6470test") or die(mysql_error()); 
$pass = sha1(mysql_real_escape_string($_POST["password"]));

$insert = "INSERT INTO users(USERNAME, PASSWORD_HASH) VALUES ('".$_POST['username']."', '".$pass."')";
$insert_bloguser = "INSERT INTO blogs(USERNAME) VALUES ('".$_POST['username']."')";

 	$add_member = mysql_query($insert);
 	$add_member = mysql_query($insert_bloguser);

?>

</body>
</html> 