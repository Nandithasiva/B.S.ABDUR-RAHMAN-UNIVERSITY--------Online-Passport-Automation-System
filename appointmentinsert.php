<?php
$host="localhost";
$user="root";
$pass="";
$db="onine_passport";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);
$locality=$_POST['locality'];
$date=$_POST['date'];
$time=$_POST['time'];
$email=$_POST['email'];

$sql = "INSERT INTO `onine_passport`.`appointment_details` (`passport office details`, `date`, `time`, `email`) 
VALUES ('{$locality}','{$date}', '{$time}', '{$email}');";
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

echo'	<script type="text/javascript">
					alert("Data added Successfuly");
				window.location = "temp.php";
			</script>';					
mysqli_close($conn);
?>