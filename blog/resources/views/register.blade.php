<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Buat Akun</title>
</head>
<div>
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
</div>

<form method="post" action= "{{ url('/welcome') }}">
<label for="first_name">First name:</label><br><br>
<input type="text" id="first_name"><br><br>
<label for="last_name">Last name</label><br><br>
<input type="text" id="last_name"><br><br>
<label for="gender">Gender:</label><br><br>
<input type="radio" name="gender">Male<br>
<input type="radio" name="gender">Female<br>
<input type="radio" name="gender">Other<br>
<br>
<label for="national">Nationality</label><br><br>
<select>
	<option>Indonesian</option>
	<option>Singaporean</option>
	<option>Malaysian</option>
	<option>Australian</option>
</select>
<br><br>
<label>Language Spoken:</label><br><br>
<input type="checkbox">Bahasa Indonesia<br>
<input type="checkbox">English<br>
<input type="checkbox">Other<br>
<br>
<label for="bio">Bio:</label><br><br>
<textarea cols="30" rows="8" id="bio"></textarea><br>

<input type="submit" value="Sign Up">
<script>
	var fn = document.getElementById("first_name").value;
	var ln = document.getElementById("last_name").value;
</script>
</form>
<body>
</body>
</html>