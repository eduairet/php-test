<?php
  function get_age_by_year($age, $year)
  {
    $calculated_age = $age + $year - date("Y");
    return "<p>You'll be $calculated_age in $year</p>";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Get age by year</h1>
  <form action="inputs.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name" value="">
    <br>
    <label for="age">Age</label>
    <input type="number" name="age" placeholder="Age" value="">
    <br>
    <label for="year">Year</label>
    <input type="number" name="year" placeholder="Year" value="">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" value="">
    <br>
    <input type="submit">
  </form>

  <?php
    if (
      isset($_POST["name"])
      && isset($_POST["age"])
      && isset($_POST["year"])
      && isset($_POST["password"])
    ) {
      echo '<div><h2>Outputs</h2>';
          echo "<p>Hello " .  $_POST["name"] . "!</p>";
          echo get_age_by_year($_POST["age"], $_POST["year"]);
          echo "<p>Your password is " . $_POST["password"] . "</p>";
      echo '</div>';
    } else {
      echo '<p style="color: red;">Please fill all fields!</p>';
    }
  ?>

</body>

</html>