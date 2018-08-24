<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Poll</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<fieldset>
	<legend>What is your favourite food?</legend>
	<form action="tallennaVastaus.php" id="form1" name="form1" method="POST">
		<label>
			<input type="radio" name="Poll" value="Tacos" id="Poll_0" />
			Tacos
		 </label>
		<label>
			<input type="radio" name="Poll" value="Pizza" id="Poll_1" />
			Pizza
		</label>
		<label>
			<input type="radio" name="Poll" value="Meatballs" id="Poll_2" />
			Meatballs
		</label>
		<label>
			<input type="radio" name="Poll" value="Salmon" id="Poll_3" />
			Salmon
		</label>
		<label>
			<input type="radio" name="Poll" value="other" id="Poll_4" />
			Other
		</label>
		<input type="submit" name="submit" id="submit" value="Vote" />
		<input type="hidden" name="id" value="form1" />
		<input type="hidden" name="MM_insert" value="form1" />
	</form>
</fieldset>
</body>
</html>