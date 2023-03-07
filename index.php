


<!DOCTYPE html>

<html>
<head>
	<title>Form Validation and Data Storage</title>
	<style>
		form {
			width: 400px;
			margin: auto;
			padding: 20px;
			border: 2px solid #ccc;
			border-radius: 10px;
		}

		label {
			display: inline-block;
			width: 100px;
			margin-bottom: 10px;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"] {
			width: 250px;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			margin-bottom: 10px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 10px;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		p.success {
			color: green;
			margin-top: 10px;
		}
	</style>
	<script>
		function validateForm() {
			var name = document.forms["myForm"]["name"].value;
			var email = document.forms["myForm"]["email"].value;
			var password = document.forms["myForm"]["password"].value;

			if (name == "") {
				alert("Name must be filled out");
				return false;
			}

			if (email == "") {
				alert("Email must be filled out");
				return false;
			}

			if (password == "") {
				alert("Password must be filled out");
				return false;
			}
		}
	</script>
</head>
<body>
	<h2>Form Validation and Data Storage Example</h2>
	<form id="myForm" name="myForm" onsubmit="return validateForm()" method="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br>

		<input type="submit" value="Submit">
	</form>

	
    <?php
// Change the following variables to match your database credentials
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert the data into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='success'>Data has been stored successfully.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
	

</body>
</html>

