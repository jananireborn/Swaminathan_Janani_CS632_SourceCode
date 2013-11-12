
<html>

    <head></head>
    <body style="background-color: #FFFF99">
        
<h1 style="text-align: center">Professor Details</h1>
<h4 style="text-align: right"><a href="signout.php">Sign-out</a></h4>
       
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

?>

      
	<br>
	<form name="profdetails"  action="proflist.php" method="post" >

	
		<h2 style="text-align: center">Find a Professor</h2>
	
	
        <br><br><br><br>
    
		Select Department:
						
			<select name="department" style="text-align: center">
            
                <option style="text-align: center" >Select Department </option> 
              
     <?php
         $sql = "SELECT DISTINCT Department FROM Professor_Details";
         $result = sqlsrv_query($conn,$sql) or die("Couldn't execute query");

         while ($data=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
         {
             echo "<option value=";
             echo $data['Department'];
             echo ">";
             echo $data['Department'];
             echo "</option>";
         }
     ?>
                </select>
            
              <br><br>
		Search By Last Name :
        <input type="text" name="txtlastname"><br>

		<input type="Submit" name="btnSearchStudent" value="Search">
        </form>
<br/>
<br/>
        <br><h4 style="text-align: center"><a href="accountprofile.php">Back to my homepage</a></h4><br>
</body>
</html>

<?php
   
    
        if(empty($_POST['department']))
        {
           $_SESSION['dept'] = '';
        }
        else
        {
            $_SESSION['dept'] = $_POST['department'];
            echo "<tr><p style='color:blue' colspan='2'>";
            echo $_SESSION['dept'];
            echo "  selected. </p></tr>"; 
        }
    
?>