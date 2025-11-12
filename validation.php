<?php
$password = $_POST['password'];
$email = $_POST['email'];

// Validate email
if (strlen($email) == 0) {
    echo "Email required";
    die;
} elseif (strlen($email) < 5) {
    echo "Please type a valid email";
    die;
}

// Validate password
if (strlen($password) == 0) {
    echo "Password required";
    die;
} elseif (strlen($password) < 5) {
    echo "Please type a valid password";
    die;
}
?>
