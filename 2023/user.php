<?php
session_start(); // Start the session (if not already started)

// Check if the user is not logged in (no session)
if (!isset($_SESSION["username"])) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome User</h1>
    </header>

    <nav>
        <ul>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <p>This is the user dashboard. Customize this page based on your user functionalities.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>
</body>
</html>
