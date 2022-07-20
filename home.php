<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="x-icon" href="logo.png">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>DU College Predictor</title>
</head>
</head>

<body>
	<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="home.php">
			<img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> DU College Predictor
		</a>
		<!-- Links -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="home.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="aboutus.php">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="login.php">Not <?php
															if (isset($_SESSION['username'])) {
																echo $_SESSION['username'];
															}
															?>? Logout</a>
			</li>
		</ul>
	</nav>
	<div class="background">
		<i class="fa fa-quote-left"></i>
		<p>Research shows that there is only half as much variation in student achievement between schools as there is among classrooms in the same school. If you want your child to get the best education possible, it is actually more important to get him assigned to a great teacher than to a great school. <i class="fa fa-quote-right"></i></p>
	</div>
	<div class="background">
		<h2>DU College Predictor</h2><br>
		<form method="post" action="home.php">
			<div id="center">
				<input class="ip" type="text" name="stream" placeholder="Please mention your stream(Sci/Com/Arts)"><br><br>
				<h3>Please enter marks in top 5 subjects begining with maximum marks</h3>
				<input class="ip" type="number" name="subject1" placeholder="Subject 1" required><br><br>
				<input class="ip" type="number" name="subject2" placeholder="Subject 2" required><br><br>
				<input class="ip" type="number" name="subject3" placeholder="Subject 3"><br><br>
				<input class="ip" type="number" name="subject4" placeholder="Subject 4"><br><br>
				<input class="ip" type="number" name="subject5" placeholder="Subject 5"><br><br>
				<input class="button" type="submit" name="submit" value="SUBMIT">
			</div>
		</form>
	</div>
	<?php
	function test_input($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if (isset($_POST['submit'])) {
		$username = $password = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$stream = test_input($_POST['stream']);
			$subject1 = test_input($_POST['subject1']);
			$subject2 = test_input($_POST['subject2']);
			$subject3 = test_input($_POST['subject3']);
			$subject4 = test_input($_POST['subject4']);
			$subject5 = test_input($_POST['subject5']);
			$percentage = ($subject1 + $subject2 + $subject3 + $subject4 + $subject5) / 5;
			echo "<div class='background'>";
			echo "<h2>Predicted Colleges</h2>";
			if ($percentage <= 60)
				echo "Colleges won't accept your application";
			else if ($stream == 'Sci') {
				if ($percentage >= 98) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. St. Stephen's College<br>";
					echo "2. Miranda House<br>";
					echo "3. Hindu College<br>";
					echo "4. Sri Venkateswara College<br>";
					echo "5. Hansraj College<br>";
				}
				if ($percentage >= 94 && $percentage < 98) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. Ramjas College<br>";
					echo "2. Gargi College<br>";
					echo "3. Acharya Narendra Dev College<br>";
					echo "4. Deen Dayal Upadhyay College<br>";
					echo "5. Kirori Mal College<br>";
				}
				if ($percentage >= 90 && $percentage < 94) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. Kalindi College<br>";
					echo "2. Atma Ram Sanatan Dharma College<br>";
					echo "3. Maharaja Agrasen College<br>";
					echo "4. Bhaskraycharya College Of Applied Sciences<br>";
					echo "5. Keshav Mahavidyalaya<br>";
				}
				if ($percentage >= 85 && $percentage < 90) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. Dayal Singh College<br>";
					echo "2. Indraprastha College<br>";
					echo "3. Sri Guru Tegh Bahadur Khalsa College<br>";
					echo "4. Ram Lal Anand College<br>";
					echo "5. Ramanujan College<br>";
				}
				if ($percentage >= 75 && $percentage < 85) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. College of Vocational Studies<br>";
					echo "2. Mata Sundari College<br>";
					echo "3. P.G.D.A.V College<br>";
					echo "4. Shaheed Rajguru College<br>";
					echo "5. Shyama Prasad Mukherjee College<br>";
				}
				if ($percentage >= 75 && $percentage < 85)
					echo "You will have to wait for colleges to reduce their cut-offs!<br>";
			} else if ($stream == 'Com') {
				if ($percentage >= 98) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. Shri Ram College of Commerce<br>";
					echo "2. Hindu College<br>";
					echo "3. Lady Shri Ram College for Women<br>";
					echo "4. Sri Venkateswara College<br>";
					echo "5. Atma Ram Sanatan Dharm College<br>";
				}
				if ($percentage >= 94 && $percentage < 98) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. Deen Dayal Upadhyaya College<br>";
					echo "2. Hans Raj College<br>";
					echo "3. Gargi College<br>";
					echo "4. Acharya Narendra Dev College<br>";
					echo "5. Daulat Ram College<br>";
				}
				if ($percentage >= 90 && $percentage < 94) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. Jesus and Mary College (JMC)<br>";
					echo "2. Ramjas College<br>";
					echo "3. Delhi College of Arts and Commerce (DCAC)<br>";
					echo "4. Sri Guru Gobind Singh College of Commerce (SGGS)<br>";
					echo "5. Kamala Nehru College (KNC)<br>";
				}
				if ($percentage >= 85 && $percentage < 90) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. Gargi college<br>";
					echo "2. Motilal Nehru College<br>";
					echo "3. Deen Dayal Upadhyaya college<br>";
					echo "4. Indraprastha college<br>";
					echo "5. Kirori mal college<br>";
				}
				if ($percentage > 60 && $percentage < 85)
					echo "You will have to wait for colleges to reduce their cut-offs!<br>";
			} else if ($stream == 'Arts') {
				if ($percentage >= 98) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. Miranda House<br>";
					echo "2. Lady Shri Ram College for Women<br>";
					echo "3. Hindu College<br>";
					echo "4. St. Stephen's College<br>";
					echo "5. Hansraj College<br>";
				}
				if ($percentage >= 94 && $percentage < 98) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. Atma Ram Sanatan Dharma College<br>";
					echo "2. Sri Venkateshwara College<br>";
					echo "3. Gargi College<br>";
					echo "4. Kirori Mal College<br>";
					echo "5. Dayal Singh College<br>";
				}
				if ($percentage >= 90 && $percentage < 94) {
					echo "You are eligible to apply for the folowing colleges:<br>";
					echo "1. Ramjas College<br>";
					echo "2. Delhi College of Arts and Commerce (DCAC)<br>";
					echo "3. Jesus and Mary College<br>";
					echo "4. Indraprastha College For Women<br>";
					echo "5. Shivaji College<br>";
					echo "6. Ramanujan College<br>";
				}
				if ($percentage > 60 && $percentage < 90)
					echo "You will have to wait for colleges to reduce their cut-offs:<br>";
			}
			echo "</div>";
		}
	}
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>