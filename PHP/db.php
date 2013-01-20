<?php

$db = mysql_connect ("sql.mit.edu", "sherryxy", "6470") or die(mysql_error());
mysql_select_db("sherryxy+6470test", $db) or die(mysql_error());
mysql_query("CREATE TABLE IF NOT EXISTS users (USERNAME VARCHAR(100) NOT NULL, PASSWORD_HASH CHAR(40) NOT NULL, UNIQUE (USERNAME))") or die (mysql_error());

?>


