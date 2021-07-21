<?php 
// DB credentials.
define('host','localhost');
define('user','root');
define('password','');
define('name','bbdms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".host.";dbname=".name,user, password);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>