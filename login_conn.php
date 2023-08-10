<?php
	session_start();
 	include("connection.php");

	 error_reporting(E_ALL);
	 ini_set('display_errors', 1);
	 

	
	if (isset($_POST["login"])) {
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		$usertype = $_POST["usertype"];
	
		try {
			$stmt = $pdo->prepare("SELECT * FROM registration_form WHERE username = :username OR email = :email");
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':email', $username);
			$stmt->execute();
	
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
			if ($row && password_verify($password, $row['password'])) {
				$_SESSION["login"] = true;
				$_SESSION["user_id"] = $row["user_id"];
				echo '<script>alert("Welcome,  to the E-library "); window.location.href = "login_elibrary.php";</script>';
				addLoginSuccessMessage($username);
				exit;
			} else {
				echo '<script>alert("Invalid Username or Password"); window.location.href = "login_page.php";</script>';

			}
		} catch (PDOException $e) {
			die("Error: " . $e->getMessage());
		}
	}
	?>