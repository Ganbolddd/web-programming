<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Validate form data
    if ($password !== $confirmPassword) {
        $response = json_encode(array("status" => "error", "message" => "Passwords do not match"));
        echo $response;
        exit();
    }

    // Hash the password (you should use a more secure hashing method in production)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Save user information to database (replace this with your database connection and query)
    // For simplicity, we'll use a local array to store user data
    $userData = json_decode(file_get_contents("users.json"), true);
    
    // Check if the username already exists
    if (isset($userData[$username])) {
        $response = json_encode(array("status" => "error", "message" => "Username already exists"));
        echo $response;
        exit();
    }

    // Add new user
    $userData[$username] = array("username" => $username, "password" => $hashedPassword);

    // Save updated data back to JSON file (in a real scenario, this would be a database update)
    file_put_contents("users.json", json_encode($userData));

    // Dummy response
    $response = json_encode(array("status" => "success", "message" => "Registration successful"));
    echo $response;
}

?>
