<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Define valid usernames and passwords
    $valid_credentials = array(
        "admin" => "password",
        "Anish" => "fitness",
        "Ayaush" => "fitness",
        "Nishant" => "qwerty",
        "Sujan" => "Sujan@12"
    );

    // Check if the provided credentials are valid
    if (array_key_exists($username, $valid_credentials) && $valid_credentials[$username] === $password) {
        // Redirect to the dashboard upon successful login
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Redirect back to the login page with an error message
        header("Location: login_error.php?error=invalid_credentials");
        exit();
    }
} else {
    // If the form is not submitted, redirect back to the login page
    header("Location: login.html");
    exit();
}
?>
