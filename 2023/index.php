<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <h1>User registration</h1>
    </header>

    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="view.php">View Users</a></li>
      </ul>
    </nav>

    <main>
      <section>
        <?php
          if (isset($_GET["error"]) && $_GET["error"] == "duplicate") {
            echo '<p style = "color: red;"> Error: User with the same first name and last name already exists.</p>';
          } 
        ?>

        <h2>Register New User</h2>
        <form action="process_registration.php" method="post">
          <label for="firstName">First Name: </label>
          <input  type="text" id="firstName" name="firstName" required>

          <label for="lastName">Last Name: </label>
          <input  type="text" id="lastName" name="lastName" required>

          <label for="age">Age: </label>
          <input type="number" id="age" name="age" required>

          <label for="gender">Gender: </label>
          <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>

          <button type="submit">Register</button>
        </form>
      </section>
    </main>
  </body>
</html>
