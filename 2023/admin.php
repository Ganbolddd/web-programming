<?php
session_start(); // Start the session (if not already started)

// Check if the user is not logged in or not an admin
if (!isset($_SESSION["username"]) || $_SESSION["userType"] !== "admin") {
    // Redirect to the login page or another appropriate page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome Admin</h1>
    </header>

    <nav>
        <ul>
            <li><a href="admin.php">Admin Dashboard</a></li>
            <li><a href="view_users.php">View Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <p>This is the admin dashboard. Customize this page based on your admin functionalities.</p>
        </section>
    </main
