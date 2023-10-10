<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>

<body>
  <form action="" method="post">
    <input type="number" step="0.1" name="num1" placeholder="Enter first number">
    <input type="number" step="0.1" name="num2" placeholder="Enter second number">
    <select name="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
      <option value="%">%</option>
      <option value="**">**</option>
    </select>
    <input type="submit" value="Calculate">
    <?php
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $operator = $_POST['operator'];
      $result = eval("return $num1 $operator $num2;");
      echo "<p>Result: $result</p>";
    } else {
      echo "<p>Invalid operation</p>";
    }
    ?>

</body>

</html>