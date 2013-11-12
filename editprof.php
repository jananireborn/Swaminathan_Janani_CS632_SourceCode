<html>
<?php
if (isset($_GET['id'])) {

$id = $_GET['id'];
//echo $id;
}
?>

    <head></head>
    <body style="background-color: #FFFF99">

        <h1 style="text-align: center">Professor Management System</h1>
	<br/>



	
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
        //$id = "SELECT Student_Id FROM Student_Details WHERE Student_Details.Last_Name='$lname' AND Student_Details.Major='$dept'";
		//$result=sqlsrv_query("select * from Student_Details where Student_Details.Last_Name='$lname' AND Student_Details.Major='$dept'");
		//while($c=sqlsrv_fetch_array($result))
		//{
			//$studentid=$c['Student_Id']
            //$firstname=$c['First_Name'];
			//$lastname=$c['Last_Name'];
			//$degree=$c['Degree'];
			//$major=$c['Major'];
			//$gender=$c['Gender'];
			//$dob=$c['DOB'];
			//$gradyear=$c['Grad_Year'];
						
			
		//}
		//?>
        <form action="updateprof.php" method="post">
           
            <table border="1" style="background-position: center">
	<tr>
		<th colspan="2" >Add Professor Details</th>
	</tr>
    <tr>
    <td>Professor ID: </td>
       
		<td><input type="text" name="txtprofid"></td>
	</tr>

	<tr>
    <td>First Name: </td>
        
           
       
		<td><input type="text" name="txtfname"></td>
	</tr>
     
    <tr>
        <td>Last Name:</td>
        <td><input type="text" name="txtlname"></td>
    </tr>
    <tr>
        <td>Department:</td>
        <td><input type="text" name="txtdept"></td>
    </tr>
    
    <tr>
		<td colspan="2"><input type="submit" name="btnsubmit" value="UPDATE">
			          <input type="button" name="btncancel" value="CANCEL">
		</td>
	</tr>

        
                      </table></form>
        
		
       </body>

</html>