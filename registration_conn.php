<?php 

    session_start();
	include("connection.php");


$firstname = $lastname = $username = $email = $password = $confirm_password = $usertype = '';
$firstname_err = $lastname_err = $username_err = $email_err = $password_err = $confirm_password_err = $usertype_err = '';
function random_num() {
    return rand();
}
if (isset($_POST['submitted'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $usertype = $_POST['usertype'];

    if (empty($firstname)) {
        $firstname_err = 'Please enter firstname';
    }

    if (empty($lastname)) {
        $lastname_err = 'Please enter lastname';
    }

    if (empty($username)) {
        $username_err = 'Please enter username';
    } else {
        $query = 'SELECT username FROM registration_form WHERE username = :username';

        if ($stmt = $pdo->prepare($query)) {
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    $username_err = 'Username is already taken';
                }
            } else {
                die('Something went wrong');
            }
        }

        unset($stmt);
    }

    if (empty($email)) {
        $email_err = 'Please enter email';
    } else {
        $query = 'SELECT email FROM registration_form WHERE email = :email';

        if ($stmt = $pdo->prepare($query)) {
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);

            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    $email_err = 'Email is already taken';
                }
            } else {
                die('Something went wrong');
            }
        }

        unset($stmt);
    }

    if (empty($confirm_password)) {
        $confirm_password_err = 'Please confirm password';
    } else {
        if ($password !== $confirm_password) {
            $confirm_password_err = 'The password do not match';
        }
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

   
    if (empty($password)) {
        $password_err = 'Please enter password';
    } elseif (strlen($password) < 6) {
        $password_err = 'Password must be at least 6 characters';
    }

    if (empty($firstname_err) && empty($lastname_err) && empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($usertype_err)) {
        $user_id = random_num(20);
        $query = "INSERT INTO registration_form (user_id, firstname, lastname, username, email, password, confirm_password, usertype) 
                  VALUES (:user_id, :firstname, :lastname, :username, :email, :password, :confirm_password, :usertype)";
        $stmt = $pdo->prepare($query);
        $result = $stmt->execute([
            ':user_id' => $user_id,
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':username' => $username,
            ':email' => $email,
            ':password' => $password,
            ':confirm_password' => $confirm_password,
            'usertype' => $usertype
        ]);

        if ($result) {
            $_SESSION['registration_success'] = true;
            echo '<script>alert("YOU HAVE REGISTERED SUCCESSFULLY !!!!"); window.location.href = "login_page.php";</script>';
            // Redirect the user to the login page
            exit();
            
            // Redirect the user to the login page
           
        } else {
            echo "Some error occurred.";
        }
    } else {
        // Display error messages
        echo "Sorry, there was an error in submitting the form.<br>";
        echo $firstname_err . "<br>";
        echo $lastname_err . "<br>";
        echo $username_err . "<br>";
        echo $email_err . "<br>";
        echo $password_err . "<br>";
        echo $usertype_err . "<br>";
}
}
?>
