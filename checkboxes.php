<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkboxes</title>
</head>

<body>
  <form action="checkboxes.php" method="post">
    <input type="checkbox" name="check[]" value="1">
    <input type="checkbox" name="check[]" value="2">
    <input type="checkbox" name="check[]" value="3">
    <input type="checkbox" name="check[]" value="4">
    <input type="checkbox" name="check[]" value="5">
    <input type="submit" value="Submit">
  </form>
</body>

<?php
if (isset($_POST['check']) && count($_POST['check']) > 0) {
  $checks = $_POST['check'];
  foreach ($checks as $val => $check) {
    echo "<p>$check</p>";
  }
} else {
  echo "No checkboxes were selected.";
}
?>

</html>