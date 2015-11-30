<?php
$host="localhost";
$user="root";
$pass="";
$db="onine_passport";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);
$name=$_POST['name'];
$lname=$_POST['lastname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$ms=$_POST['maritalstatus'];
$address=$_POST['address'];
$place=$_POST['placeofbirth'];
$city=$_POST['city'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$sql = "INSERT INTO `onine_passport`.`personal_details` (`name`, `lname`, `fathers name`, `mothers name`, `DOB`, `gender`,`martial status`,`address`,`place of birth`, `city`,`phone`,`email`) VALUES ('{$name}','{$lname}', '{$fname}', '{$mname}', '{$dob}', '{$gender}','{$ms}', '{$address}', '{$place}', '{$city}', '{$phone}', '{$email}');";
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

echo'	<script type="text/javascript">
					alert("Data Added successfully");
				window.location = "other2.php";
			</script>';					
mysqli_close($conn);
?>