<?php 
// DB credentials.
define('DB_HOST','bdms.mysql.database.azure.com');
define('DB_USER','kalana');
define('DB_PASS','Isuru@7794');
define('DB_NAME','bbdms');
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
