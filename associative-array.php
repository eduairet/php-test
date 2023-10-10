<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Array</title>
</head>

<body>
  <?php
  $person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
  );
  echo $person["name"];
  echo "<br>";
  echo $person["age"];
  echo "<br>";
  echo $person["city"];
  ?>

  <form action="" method="post">
    <input type="text" name="name" placeholder="Enter name">
    <input type="text" name="age" placeholder="Enter age">
    <input type="text" name="city" placeholder="Enter city">
    <input type="submit" value="Submit">
    <?php
    if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["city"])) {
      echo $_POST["name"];
      echo "<br>";
      echo $_POST["age"];
      echo "<br>";
      echo $_POST["city"];
    } else if (isset($_POST["name"]) || isset($_POST["age"]) || isset($_POST["city"])) {
      echo "Complete data was not submitted";
    } else {
      echo "There is no data submitted";
    }
    ?>

</body>

</html>