<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $userType = $_POST["userType"];
    $password = $_POST["password"];

    // Load existing user data from JSON file
    $userData = json_decode(file_get_contents("users.json"), true);

    // Check if the user already exists
    foreach ($userData as $user) {
        if (strcasecmp($user["firstName"], $firstName) == 0 && strcasecmp($user["lastName"], $lastName) == 0) {
            // Redirect to the home page with an error message
            header("Location: index.php?error=duplicate");
            exit();
        }
    }

    // Hash the password before storing it (for better security)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Add new user with user type and hashed password
    $newUser = array(
        "firstName" => $firstName,
        "lastName" => $lastName,
        "age" => $age,
        "gender" => $gender,
        "userType" => $userType,
        "password" => $hashedPassword // Store hashed password
    );

    $userData[] = $newUser;

    // Save updated user data to JSON file
    file_put_contents("users.json", json_encode($userData));

    // Redirect to the home page
    header("Location: index.php");
    exit();
}
?>
