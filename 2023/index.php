<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>User Registration</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <?php
            // Check for duplicate registration error
            if (isset($_GET["error"]) && $_GET["error"] == "duplicate") {
                echo '<p style="color: red;">Error: User with the same first name and last name already exists.</p>';
            }
            ?>

            <h2>Register New User</h2>
            <form action="process_registration.php" method="post">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>

                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>

                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <label for="userType">User Type:</label>
                <select id="userType" name="userType" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Register</button>
            </form>
        </section>

        <section>
            <h2>Login</h2>
            <p>If you are already registered, you can <a href="login.php">login here</a>.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>
</body>
</html>
