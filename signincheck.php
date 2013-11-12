<?php

$username=$_POST['txtuname'];
$password=$_POST['txtpwd'];

if(($username=='admin') && ($password=='admin'))
			{

                header("location:accountprofile.php?id=$rid");
				echo '<h1>Welcome';
			
			}
			else
			{
				header("location:index.php");
				
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
