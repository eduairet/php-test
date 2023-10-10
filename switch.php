<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch Statement</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="favcolor" value="favcolor">
    <input type="submit">
  </form>
  <br>
  <?php
  if (isset($_POST['favcolor'])) {
    $fav_color = $_POST['favcolor'];
  } else {
    $fav_color = "";
  }
  switch ($fav_color) {
    case "red":
      echo "Your favorite color is red!";
      break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
    case "green":
      echo "Your favorite color is green!";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
  }
  ?>
</body>

</html>