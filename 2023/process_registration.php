<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    $userData = json_decode(file_get_contents("users.json"), true);

    foreach ($userData as $user) {
        if(strcasecmp($user["firstName"], $firstName) == 0 && strcasecmp($user["lastName"], $lastName) == 0) {
            header("Location: index.php?error=duplicate");
            exit();
        }
    }

    $newUser = array(
        "firstName" => $firstName,
        "lastName" => $lastName,
        "age" => $age,
        "gender" => $gender,
    );

    $userData[] = $newUser;

    file_put_contents("users.json", json_encode($userData));

    header("Location: index.php");
    exit();
}
?>