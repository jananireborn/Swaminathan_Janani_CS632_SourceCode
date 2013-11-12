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

            $studentid=$_POST['txtstudentid'];
            $fname=$_POST['txtfname'];
            $lname=$_POST['txtlname'];
            $degree=$_POST['txtdegree'];
            $major=$_POST['txtmajor'];
            $gender=$_POST['txtgender'];
            $gradyr=$_POST['txtgradyr'];
        
        $sql="INSERT INTO Student_Details (Student_Id, First_Name, Last_Name, Degree, Major, Gender, Grad_Year) 
                VALUES ('$studentid','$fname','$lname','$degree','$major','$gender','$gradyr')";
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
