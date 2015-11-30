<?php
$host="localhost";
$user="root";
$pass="";
$db="onine_passport";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);
$name=$_POST['name'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$sql="SELECT * FROM onine_passport.register where email='$email';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo '<script language="JavaScript">
		alert("There is already an account associated with this Email.. ");
		window.location=("register2.php");
		</script>';
}
else
{
$sql = "INSERT INTO `onine_passport`.`register` (`name`, `lname`, `dob`, `email`, `phone`, `pasword`,`confpassword`) VALUES ('{$name}','{$lname}', '{$dob}', '{$email}', '{$phone}', '{$password}','{$cpassword}');";
$retval = mysqli_query( $conn, $sql );
}
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

echo'	<script type="text/javascript">
					alert("Registration Successful");
				window.location = "home.php";
			</script>';					
mysqli_close($conn);
?>