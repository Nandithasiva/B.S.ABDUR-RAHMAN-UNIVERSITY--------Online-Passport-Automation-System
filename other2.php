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
<body bgcolor="#b5b575">
<center>

<form method="post" action="otherinsert.php">
<fieldset>
<legend><h1>பிற விபரங்கள்</h1></legend>
<pre>
<div align="left">

பாஸ்போர்ட் வகை	:	<input type="radio" name="passporttype" value="normal" />இயல்பான	<input type="radio" name="passport type" value="Tatkal" />கூடிய உடனடி


கல்வி தகுதி		:	<select name="education">
<option value="select option" selected>வகையை தேர்ந்தெடுக்கவும்</option>
<option value="matriculate">மெட்ரிகுலேஷன்</option>
<option value="HSC">மேல்நிலை</option>
<option value="degree">பட்டம்</option>
<option value="post graduate">முதுகலை</option>
</select>


தேசியம்		:	<select name="nationality">
<option value="select option" selected> வகையை தேர்ந்தெடுக்கவும்</option>
<option value="Indian">இந்திய</option>
<option value="Anglo indian">ஆங்கிலோ இந்தியன்</option>
<option value="Others">மற்றவர்கள்</option>
</select>


மதம்			:       <select name="religion">
<option value="select option" selected> வகையை தேர்ந்தெடுக்கவும்</option>
<option value="Hindu">இந்து மதம்</option>
<option value="christian">கிரிஸ்துவர்</option>
<option value="Islam">இஸ்லாமியம்</option>
<option value="others">மற்றவர்கள்</option>
</select>


ஆதார் அட்டை எண்	:	<input type="text" name="acnumber" required />


பான் கார்டு எண்	:       <input type="text" name="pannumber" required />


மின்னஞ்சல்		::	<input type="email" name="email" required />

<input type="submit" name="submit" value="சமர்ப்பிக்க">
</div>

</pre>
</fieldset>
</form>
<a href="reference2.php" class="link">Next</a>
</body>
</html>
