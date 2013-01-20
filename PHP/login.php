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
<h1>Login</h1>

<?php
$success = false;

// check if login attempt
if (isset($_POST["username"]) && isset($_POST["password"])) {
require("db.php");	// establish DB connection
$user = $_POST["username"];
$pass = sha1($_POST["password"]);
$query = "SELECT PASSWORD_HASH from users WHERE USERNAME='" . mysql_real_escape_string($user) . "'";
$result = mysql_query($query, $db) or die(mysql_error());
$row = mysql_fetch_assoc($result);
if ($pass == $row["PASSWORD_HASH"]) {
$success = true;
echo "$user successfully logged in.";
}
else {
echo "Invalid username or password <br />";
}
}

// not logged in
if (!$success) {	// show form
?>
<form action="welcome.php" method="post">
Username: <input type="text" name="username" /><br />
Password: <input type="password" name="password" /><br />
<input type="submit" />
</form>
<br />
<br />
<a href="registration.html">Click here to register</a>
<?php }?>

</body>
</html> 