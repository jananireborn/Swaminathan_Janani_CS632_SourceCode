<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body style="background-color: #FFFF99">
        <h1 style="text-align: center">Student Details</h1>
        <h4 style="text-align: center"><a href="signout.php">Sign-out<br></a></h4>

<?php
// DB connection info
$host = "tcp:ijgahanrre.database.windows.net,1433";
$user = "studentdb@ijgahanrre";
$pwd = "Ingram10";
$db = "studentAptybDxNC";

//$serverName = "tcp:ijgahanrre.database.windows.net, 1433";
$connectionOptions = array("Database"=>$db, 
                           "UID"=>$user,
                           "PWD"=>$pwd);
                           
$conn = sqlsrv_connect($host, $connectionOptions);
 
if($conn === false)
{
    die(print_r(sqlsrv_errors(), true));
    echo "failure";
}

if($conn === TRUE)
{
    echo "connection success!";
}

//mssql_select_db('studentAptybDxNC');


?>
        <table style="margin: auto" border="1">
	<tr>
		<th colspan="6" >Student Details</th>
	</tr>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Degree</th>
		<th>Major</th>
		<th>Gender</th>
        <th>Graduation Year</th>
	
	</tr>
             
	<tr>
	<?php
	
	$lname=$_POST['txtlastname'];
    $dept=$_POST['department'];

    
$query = "SELECT First_Name, Last_Name, Degree, Major, Gender, Grad_Year
FROM Student_Details
WHERE Last_Name='$lname' AND Major='$dept'";

$id = "SELECT Student_Id FROM Student_Details WHERE Student_Details.Last_Name='$lname' AND Student_Details.Major='$dept'";
	 
$result = sqlsrv_query($conn, $query) or die("Couldn't execute query");



// Print out the contents of each row into a table 

while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
{
    ?>
        
        <td><?php echo $row['First_Name'];?></td>
        <td><?php echo $row['Last_Name'];?></td>
        <td><?php echo $row['Degree'];?></td>
        <td><?php echo $row['Major'];?></td>
        <td><?php echo $row['Gender'];?></td>
        <td><?php echo $row['Grad_Year'];?></td>
        

	</tr>

	<?php
}?>

            </table>
        <br><br><br><br>
       <h4 style="text-align: center"><a href="student_details.php">Perform another search</a></h4><br>
        <br><h4 style="text-align: center"><a href="accountprofile.php">Back to my homepage</a></h4><br>
       
</body>
</html>

