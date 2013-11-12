<?php
// DB connection info
$host = "tcp:ijgahanrre.database.windows.net,1433";
$user = "studentdb@ijgahanrre";
$pwd = "Ingram10";
$db = "studentAptybDxNC";

//$serverName = "tcp:ijgahanrre.database.windows.net, 1433";
$connectionOptions = array("Database" => $db, 
                           "UID" => $user,
                           "PWD" => $pwd);
$conn = sqlsrv_connect($host, $connectionOptions);
 
if($conn === false)
{
    die(print_r(sqlsrv_errors(), true));
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
