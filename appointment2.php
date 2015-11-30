<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.link{
background-color:#450000;
color:#b5b575;

}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="b5b575">
<center>
<form method="post" action="appointmentinsert.php">
<pre>
<div align="left">
<fieldset>
<legend>
<h1>நியமனம் விவரங்கள்</h1></legend>
பாஸ்போர்ட் அலுவலகம் இடம்	:	<select name="locality">
<option value="select category">வகை தேர்வு</option>
<option value="Tambaram">தாம்பரம்</option>
<option value="Sali gramam">சாலி கிராமம்</option>
<option value="Aminjikarai"></option> 
</select>


தேதி				:	<input type="date" name="date" required /> 


நேரம்				:	<input type="time" name="time" required />


மின்னஞ்சல்			::	<input type="text" name="email" required />

<input type="submit" name="submit" value="சமர்ப்பிக்க" />
</div>
</pre>
</form>
<a href="self2.php" class="link">Next</a>
</fieldset></body>
</html>
