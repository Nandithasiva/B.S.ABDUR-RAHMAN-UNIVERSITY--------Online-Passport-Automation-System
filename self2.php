<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>
<body bgcolor="b5b575">
<center>

<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass);
$db="onine_passport";
mysqli_select_db($conn,$db);
$email=$_POST['email'];
$sql="select * from onine_passport.personal_details where email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo '<h1> Personal Details </h1>';
echo '<table border=1 width=600>';
while($row=mysqli_fetch_assoc($result))
{
echo '<tr><td>name</td><td>'.$row['name'].'</td></tr>';
echo '<tr><td>lastname</td><td>'.$row['lname'].'</td></tr>';
echo '<tr><td>fathers name</td><td>'.$row['fathers name'].'</td></tr>';
echo '<tr><td>mothers name</td><td>'.$row['mothers name'].'</td></tr>';
echo '<tr><td>Date of birth</td><td>'.$row['DOB'].'</td></tr>';
echo '<tr><td>gender</td><td>'.$row['gender'].'</td></tr>';
echo '<tr><td>marital status</td><td>'.$row['martial status'].'</td></tr>';
echo '<tr><td>address</td><td>'.$row['address'].'</td></tr>';
echo '<tr><td>city</td><td>'.$row['city'].'</td></tr>';
echo '<tr><td>Place of birth</td><td>'.$row['place of birth'].'</td></tr>';
echo '<tr><td>email</td><td>'.$row['email'].'</td><tr>';
echo '<tr><td>phone</td><td>'.$row['phone'].'</td><tr>';
}
echo '</table>';
}
mysqli_close($conn);
?>



<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass);
$db="onine_passport";
mysqli_select_db($conn,$db);
$email=$_POST['email'];
$sql="select * from onine_passport.other_details where email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo '<h1> Other details </h1>';
echo '<table border=1 width=600>';
while($row=mysqli_fetch_assoc($result))
{
echo '<tr><td>Passport type</td><td>'.$row['passport type'].'</td></tr>';
echo '<tr><td>Educational Qualification</td><td>'.$row['educational qualificatoin'].'</td></tr>';
echo '<tr><td>nationality</td><td>'.$row['nationality'].'</td></tr>';
echo '<tr><td>relegion</td><td>'.$row['relegion'].'</td></tr>';
echo '<tr><td>aadhar card number</td><td>'.$row['aadhar card number'].'</td></tr>';
echo '<tr><td>pan card number</td><td>'.$row['pan card number'].'</td></tr>';

}
echo '</table>';
}
mysqli_close($conn);
?>


<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass);
$db="onine_passport";
mysqli_select_db($conn,$db);
$email=$_POST['email'];
$sql="select * from onine_passport.references where email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo '<h1> References </h1>';
echo '<table border=1 width=600>';
while($row=mysqli_fetch_assoc($result))
{
echo '<tr><td>name 1</td><td>'.$row['reference name 1'].'</td></tr>';
echo '<tr><td>address 1</td><td>'.$row['address 1'].'</td></tr>';
echo '<tr><td>phone 1</td><td>'.$row['phone 1'].'</td></tr>';
echo '<tr><td>name 2</td><td>'.$row['reference name 2'].'</td></tr>';
echo '<tr><td>address 2</td><td>'.$row['address 2'].'</td></tr>';
echo '<tr><td>phone 2</td><td>'.$row['phone 2'].'</td></tr>';

}
echo '</table>';
}
mysqli_close($conn);
?>




<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass);
$db="onine_passport";
mysqli_select_db($conn,$db);
$email=$_POST['email'];
$sql="select * from onine_passport.appointment_details where email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo '<h1> Appointment details</h1>';
echo '<table border=1 width=600>';
while($row=mysqli_fetch_assoc($result))
{
echo '<tr><td>Passport office</td><td>'.$row['passport office details'].'</td></tr>';
echo '<tr><td>date</td><td>'.$row['date'].'</td></tr>';
echo '<tr><td>time</td><td>'.$row['time'].'</td></tr>';


}
echo '</table>';
}
mysqli_close($conn);
?>
<h1>சுய அறிவிப்பு</h1> 
<FORM method="post" action="">
<PRE>
<INPUT type="CHECKBOX" name="CHECK" /><p>
நான் இந்திய அரசாங்கம் வெளியிட்ட விதிமுறைகள் மற்றும் நிபந்தனைகளுக்கு ஒப்புக்கொள்கிறேன்.
</p>
<a href="login.html">LOGOUT</a>
</PRE>
</FORM>
</body>
</html>
