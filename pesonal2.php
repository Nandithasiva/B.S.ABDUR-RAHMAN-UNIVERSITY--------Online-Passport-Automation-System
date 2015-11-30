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
</head>
<body bgcolor="#b5b575">
<center>

<form method="post" action="personalinsert.php">
<fieldset>
<legend><h2>சொந்த விவரங்கள்</h2></legend>
<pre>
<div align="left">
பெயர்			:	        <input type="text" name="name" required size=30/>


கடைசி பெயர்		:		<input type="text" name="lastname" required size=30/>


தந்தையர் பெயர்	:		<input type="text" name="fname" required size=30/>


தாயின் பெயர்		:		<input type="text" name="mname" required size=30/>


பிறந்த தேதி		:               <input type="date" name="dob" required size=30/>


பால்			:	       <input type="radio" name="gender" value="male" />ஆண்	<input type="radio" name="gender" value="female" />பெண்


திருமண நிலை		:	       <input type="radio" name="maritalstatus" value="single" />ஒற்றை	<input type="radio" name="maritalstatus" value="married" />தம்பதிகள்


முகவரி			:		<textarea name="address" required size=30></textarea>


பிறந்த இடம்		:		<input type="text" name="placeofbirth" required />


பெருநகரம்		:		<input type="text" name="city" required size=30/> 


தொலைபேசி எண்	:		<input type="text" name="phone" required size=30/>


மின்னஞ்சல்		::		<input type="text" name="email" reuired size=30/>

				<input type="submit" name="submit" value="சமர்ப்பிக்க" />
</div>
				

<a href="other2.php" class="link">Next</a>	
</pre>
</fieldset>
</form>
</body>
</html>
