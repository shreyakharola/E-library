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

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($user) {
				if (password_verify($password, $user['password'])) {
					// Check if usertype matches
					if ($usertype === $user['usertype']) {
						$_SESSION['username'] = $username;
                        
						if ($user['usertype'] == "admin") {
							header('Location: admin_login_elibrary.php');
						} else if ($user['usertype'] == "user") {
							header('Location: login_elibrary.php');
						}
                        $_SESSION['logged'] = 'yes';
						exit();
					} else  {
						$_SESSION['status'] = "Incorrect User type";
						echo '<script>alert("Invalid usertype !!!!"); window.location.href = "login_page.php";</script>';
						exit();
					}
                } else {
                    $_SESSION['status'] = "Incorrect password";
                    echo '<script>alert("Invalid password !!!!"); window.location.href = "login_page.php";</script>';
                    exit();
                }
            } else {
                $_SESSION['status'] = "Email / Username not found";
                echo '<script>alert("Invalid username/email !!!!"); window.location.href = "login_page.php";</script>';
                exit();
            }
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
?>
