<?php 
// DB credentials.
define('DB_HOST','bdmsn.mysql.database.azure.com');
define('DB_USER','kalana');
define('DB_PASS','Nan@2024');
define('DB_NAME','bdms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>


