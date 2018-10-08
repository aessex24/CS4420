<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Welcome to Ski Slope Excuse</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/styles.css?v=1.0">

<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
	require('connect.php');
	
	//if the values are posted insert them into the database.
	if(isset($_POST['email'])){
		
		$email = $_POST['email'];	
		$fName = $_POST['fName'];
		$lName = $_POST['lName'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$kids = $_POST['kids'];
		$married = $_POST['married'];
		$password = $_POST['password'];
		$industry = $_POST['industry'];
		
		$query = "INSERT INTO `User` (email, fName, lName, gender, age, kids, married, password, industry) VALUES ('$email', '$fName', '$lName', '$gender', '$age', '$kids', '$married', '$password', '$industry')";
		$result = mysqli_query($connection, $query);
		
		if ($result){
			$smsg = "User Created Successfully.";
		}else{
			$fmsg = "User Registration Failed";
		}
		
	}
				
?>
<div class="container">
    <form class="form-signin" method="POST">
	  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="form-group">
        	<label for="inputEmail" class="sr-only">Email address</label>
        	<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>  
		</div>   
		<div class="form-group">
			<label for="inputfName" class="sr-only">First Name</label>
			<input type="text" name="fName" id="inputfName" class="form-control" placeholder="First Name" required autofocus>
			<label for="inputlName" class="sr-only">Last Name</label>
			<input type="text" name="lName" id="inputlName" class="form-control" placeholder="Last Name" required autofocus>
			<label for="selectGender" class="sr-only">Gender</label>
			<select name="gender" id="selectGender" class="form-control" required autofocus>
				<option value="0">Select your Gender</option>
				<option value="M">M</option>
				<option value="F">F</option>
			</select>
			<label for="inputAge" class="sr-only">Age</label>
			<input type="number" name="age" id="inputAge" class="form-control" placeholder="age" required autofocus>
			<label for="inputKids" class="sr-only">Kids</label>
			<input type="number" name="kids" id="inputKids" class="form-control" placeholder="How many kids do you have?" required autofocus>
			<label for="isMarried" class="sr-only">Married</label>
			<select name="married" id="isMarried" class="form-control" required autofocus>
				<option value="0">Are you married?</option>
				<option value="1">T</option>
				<option value="0">F</option>
			</select>
			<label for="inputPassword" class="sr-only">Password</label>
        	<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>   
			<label for="inputIndustry" class="sr-only">Industry</label>
			<input type="text" id="inputIndustry" name="industry" class="form-control" placeholder="What industry do you work in?" required>
		</div>
			
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
    </form>
</div>
</body>
</html>

