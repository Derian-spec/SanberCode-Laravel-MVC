<!DOCTYPE html>
<html>
<head>
	<title>Buat Account</title>
</head>
<body>

	<h1>Buat Account Baru!</h1>

	<h2>Sign Up Form</h2>
	<form action="/wellcome1" method="post">
    @csrf
		<label for="Fname">First Name : </label><br><br>
		<input type="text" name="Fname" placeholder="Insert your first name" id="Fname" size="30" autocomplete="off" required ><br><br>
		<label for="Lname">Last Name : </label><br><br>
		<input type="text" name="Lname" placeholder="Insert your last name" id="Lname" size="30" autocomplete="off" required><br><br>
		<label>Gender : <br><br></label>
				<input type="radio" name="gender" value="M" id="male">
					<label for="male">Male</label><br>
				<input type="radio" name="gender" value="F" id="female">
					<label for="female">Female</label><br>
				<input type="radio" name="gender" value="O" id="other1">
					<label for="other1">Other</label><br><br>
		 
		<label>Nationality:</label>
		<br><br>
		<select>
			<option value="indonesia" >Indonesia</option>
			<option value="inggris">Inggris</option>
			<option value="jepang">Jepang</option>
			<option value="arabian">Arabian</option>
		</select><br><br>

		<label>Language Spoken:</label>
		<br><br>
		<input type="checkbox" id="bindo">
			<label for="bindo">Bahasa Indonesia</label><br>
		<input type="checkbox" id="bing">
			<label for="bing">English</label><br>
		<input type="checkbox" id="other2">
			<label for="other2">Other</label><br><br>

		<label for="bio">Bio: </label><br><br>
		<textarea cols="80" rows="8" id="bio" placeholder="Insert your Bio..."></textarea>
		<br>

		<button type="submit" name="signup">Sign Up</button>
		<br><br>
	</form>

</body>
</html>