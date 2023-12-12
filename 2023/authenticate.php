<?php
session_start(); // Start the session (if not already started)

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"]; // Assuming you have a field named "username"
    $password = $_POST["password"];

    // Load user data from JSON file
    $userData = json_decode(file_get_contents("users.json"), true);

    // Check if the user exists
    foreach ($userData as $user) {
        if ($user["firstName"] === $username && password_verify($password, $user["password"])) {
            // Set session to indicate that the user is logged in
            $_SESSION["username"] = $username;
            $_SESSION["userType"] = $user["userType"];

            // Redirect based on user type
            if ($user["userType"] === "admin") {
                // User is an admin, redirect to admin page
                header("Location: admin.php");
                exit();
            } elseif ($user["userType"] === "user") {
                // User is a regular user, redirect to user page
                header("Location: user.php");
                exit();
            }
        }
    }

    // Invalid credentials, redirect back to login page with an error
    header("Location: login.php?error=invalid");
    exit();
}
?>
