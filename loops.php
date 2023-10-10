<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
</head>

<body>
  <?php
  $random_num = 0;
  while ($random_num != 5) {
    echo  "<p>$random_num</p>";
    $random_num = random_int(0, 5);
  }
  echo  "<p style='color: red; font-weight: bold;'>$random_num</p>";
  do {
    $random_num = random_int(6, 10);
    echo  "<p>$random_num</p>";
  } while ($random_num != 10);
  echo  "<p style='color: red; font-weight: bold;'>$random_num</p>";
  for ($i = 0; $i < 5; $i++) {
    echo "<p>$i</p>";
  }
  foreach (range(6, 10) as $i) {
    echo "<p>$i</p>";
  }
  $lucky_numbers = array(3, 192, 39, 12, 86);
  for ($i = 0; $i < count($lucky_numbers); $i++) {
    echo "<p>$lucky_numbers[$i]</p>";
  }
  foreach ($lucky_numbers as $i) {
    echo "<p>$i</p>";
  }
  ?>
</body>

</html>