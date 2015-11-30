<?php
$host="localhost";
$user="root";
$pass="";
$db="onine_passport";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);
$type=$_POST['passporttype'];
$education=$_POST['education'];
$nationality=$_POST['nationality'];
$religion=$_POST['religion'];
$aadhar=$_POST['acnumber'];
$pan=$_POST['pannumber'];

$email=$_POST['email'];

$sql = "INSERT INTO `onine_passport`.`other_details` (`passport type`, `educational qualificatoin`, `nationality`, `relegion`, `aadhar card number`, `pan card number`,`email`) 
VALUES ('{$type}','{$education}', '{$nationality}', '{$religion}', '{$aadhar}', '{$pan}','{$email}');";
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

echo'	<script type="text/javascript">
					alert("Data added Successfuly");
				window.location = "reference2.php";
			</script>';					
mysqli_close($conn);
?>