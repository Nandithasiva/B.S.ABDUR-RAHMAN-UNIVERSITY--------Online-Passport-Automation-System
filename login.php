<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("onine_passport", $connection);
$username=$_POST['email'];
$password=$_POST['password'];
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from register where pasword='$password' AND email='$username'", $connection);
if ( mysql_num_rows($query) == 1)
{
echo '<script language="Javascript">
	alert("Logged In successfully ");
	window.location=("pesonal2.php");</script>';
} 
else
 {
echo '<script language="Javascript">
	alert("Invalid Username Or Password ");
	window.location=("login2.php");
	</script>';
}
mysql_close($connection); // Closing Connection
?> 
