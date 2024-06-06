<?php
session_start(); // Start the session

// Check if the logout parameter is set and logout is requested
if (isset($_GET['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // If the session uses cookies, destroy the session cookie as well
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Destroy the session
    session_destroy();

    // Redirect the user back to the login page
    header("Location: login.html");
    exit();
} else {
    // If logout is not set, redirect to a default page, e.g., dashboard or home
    header("Location: login.html");
    exit();
}
?>
