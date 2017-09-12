<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="/handel_form.php" method="post">
	<fieldset>
		<legend>Enter your information in the form below:</legend>
		<p><label>Name: <input type="text" name="name" size="20" maxlength="40"></label></p>
		<p><label>Email address: <input type="text" name="email" size="40" maxlength="120"></label></p>
		<p><label for="gender">Gender: </label><input type="radio" name="gender" value="M" /> Male <input type="radio" name= "gender" value="F" /> Female</p>
		<p><label>Age: <select name="name">
					<option value="0-29">Under 30</option>
					<option value="30-60">Between 30 and 60</option>
					<option value="60+">Over 60</option>
				</select></label></p>
		<p><label><textarea name="comments"cols="30" rows="10"></textarea></label></p>
	</fieldset>
	<p><input type="submit" name="submit" value="Submit my information"></p>
</form>
</body>
</html>