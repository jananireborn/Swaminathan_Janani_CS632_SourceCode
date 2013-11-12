<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body style="background-color: #FFFF99">
        <h1 style="text-align: center">Professor Details</h1>
        <h4 style="text-align: right"><a href="signout.php">Sign-out<br></a></h4>

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
		<th colspan="6" >Professor Details</th>
	</tr>
	<tr>
        <th>Professor ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Department</th>

		
	
	</tr>
             
	<tr>
	<?php
	
	$lname=$_POST['txtlastname'];
    $dept=$_POST['department'];

    
$query = "SELECT Professor_Id, Prof_FName, Prof_LName, Department
FROM Professor_Details
WHERE Prof_LName='$lname' AND Department='$dept'";

$id = "SELECT Professor_Id FROM Professor_Details WHERE Professor_Details.Prof_LName='$lname' AND Professor_Details.Department='$dept'";
	 
$result = sqlsrv_query($conn, $query) or die("Couldn't execute query");



// Print out the contents of each row into a table 

while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
{
    ?>
        <td><?php echo $row['Professor_Id'];?></td>
        <td><?php echo $row['Prof_FName'];?></td>
        <td><?php echo $row['Prof_LName'];?></td>
        <td><?php echo $row['Department'];?></td>
        
        

	</tr>

	<?php
}?>

            </table>
        <br><br><br><br>
       <h4 style="text-align: center"><a href="prof_details.php">Perform another search</a></h4><br>
       <br><h4 style="text-align: center"><a href="accountprofile.php">Back to my homepage</a></h4><br>
</body>
</html>
