<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Users</title>
  </head>
  <body>
    <header>
      <h1>View Users</h1>
    </header>

    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="view.php">View users</a></li>
      </ul>
    </nav>

    <main>
      <h2>User List</h2>
      <?php
        $userData = json_decode(file_get_contents("users.json"), true);

        if (!empty($userData)) {
          echo '<table border="1">';
          echo '<th>First Name</th><th>LastName<th>Age</th><th>Gender></th>';

          foreach ($userData as $user) {
            echo '<tr>';
            echo '<td>' . $user["firstName"] . '</td>';
            echo '<td>' . $user["lastName"] . '</td>';
            echo '<td>' . $user["age"] . '</td>';
            echo '<td>' . $user["gender"] . '</td>';
            echo '<tr>';
          }
          echo '</table>';
        } else {
          echo '<p>No users found. </p>';
        }
      ?>
    </main>
  </body>
</html>
