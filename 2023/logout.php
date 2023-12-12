<?php
session_start(); // Start the session (if not already started)

// Perform any necessary logout actions (e.g., destroy session, clear cookies, etc.)
session_destroy();

// Redirect to the login page after logout
header("Location: login.php");
exit();
?>
