<?php 
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "bdms.mysql.database.azure.com", "kalana", "Isuru@7794", "bbdms", 3306, MYSQLI_CLIENT_SSL);
?>
