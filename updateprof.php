<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body style="background-color: #FFFF99"><br><br><br><br>
        <h1 style="text-align: center">New Professor Added Successfully!!!!<?php echo "$professorid"?></h1>
        <br><br><br><br><h2  style="text-align: center"><a href="accountprofile.php">Back to my home page</a></h2>
<?php
   $serverName = "ijgahanrre.database.windows.net,1433";
   $userName = 'studentdb@ijgahanrre';
   $userPassword = 'Ingram10';
   $dbName = "studentAptybDxNC";

   $connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);


   sqlsrv_configure('WarningsReturnAsErrors', 0);
   $conn = sqlsrv_connect( $serverName, $connectionInfo);
   if($conn === false)
   {
     FatalError("Failed to connect...");
   }
  
?>


<?php

            $professorid=$_POST['txtprofid'];
            $fname=$_POST['txtfname'];
            $lname=$_POST['txtlname'];
            $dept=$_POST['txtdept'];
            
        
        $sql="INSERT INTO Professor_Details (Professor_Id, Prof_FName, Prof_LName, Department) 
                VALUES ('$professorid','$fname','$lname','$dept')";
        //or die(sqlsrv_error());
        
        $result=sqlsrv_query($conn,$sql) or die("Couldn't execute query");

//if (!sqlsrv_query($conn,$sql))
  //{
  //die('Error: ' . sqlsrv_error($conn));
  //}
header("location:success.php");

        
?>



    </body>
</html>
