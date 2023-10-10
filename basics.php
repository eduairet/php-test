<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $name = "John";
  $age = 30;
  echo ("<h1><span style='color:red;'>Hello</span> World!</h1>");
  echo ("<br>");
  echo ("Today is " . date("Y-m-d"));
  echo ("<br>");
  echo $name . " is " . $age . " years old.";
  $name = "Jane";
  echo "<br>";
  echo $name . " is " . $age . " years old.";
  ?>
  <hr>
  <h2>Types</h2>
  <?php
    $myString = "Hello World";
    $myNumber = 10;
    $myFloat = 10.5;
    $myBoolean = true;
    $myArray = array("Hello", "World");
    $myObject = (object) array("Hello", "World");
    $myNull = null;
    echo $myString;
    echo "<br>";
    echo $myNumber;
    echo "<br>";
    echo $myFloat;
    echo "<br>";
    echo $myBoolean;
    echo "<br>";
    foreach ($myArray as $value) {
      echo $value;
      echo "<br>";
    }
  ?>
  <hr>
  <h2>String</h2>
  <?php
    $myString = "hello World!";
    $myString[0] = "H";
    echo substr($myString, 0, -1) . ' ' . $myString[-1];
    echo "<br>";
    echo strlen($myString);
    echo "<br>";
    echo str_replace("World", "Universe", $myString);
    echo "<br>";
    echo strpos($myString, "World");
    echo "<br>";
    echo str_repeat($myString, 2);
    echo "<br>";
    echo str_split($myString);
    echo "<br>";
    echo str_word_count($myString);
    echo "<br>";
    echo strtoupper($myString);
    echo "<br>";
    echo strtolower($myString);
    echo "<br>";
    echo trim($myString);
    echo "<br>";
  ?>
  <h2>Numbers</h2>
  <?php
    $myNumber = 9;
    $myFloat = 10.5;
    $myHex = 0x10;
    $myOctal = 010;
    $myBinary = 0b10;
    echo $myNumber - $myFloat;
    echo "<br>";
    echo 10 / 3;
    echo "<br>";
    echo 10 % 3;
    echo "<br>";
    echo pow(2, 3);
    echo "<br>";
    echo sqrt(9);
    echo "<br>";
    echo round(10.5);
    echo "<br>";
    echo rand(1, 10);
    echo "<br>";
    echo $myNumber++;
    echo "<br>";
    echo $myNumber--;
    echo "<br>";
    echo ++$myNumber;
    echo "<br>";
    echo --$myNumber;
    echo "<br>";
    echo $myNumber += 10;
    echo "<br>";
    echo $myNumber -= 10;
    echo "<br>";
    echo $myNumber *= 10;
    echo "<br>";
    echo $myNumber /= 10;
    echo "<br>";
    echo $myNumber %= 10;
    echo "<br>";
    echo $myNumber **= 10;
    echo "<br>";
    echo $myNumber &= 10;
    echo "<br>";
    echo $myNumber |= 10;
    echo "<br>";
    echo $myNumber ^= 10;
    echo "<br>";
    echo $myNumber <<= 10;
  ?>

  <?php
    // You can include other PHP or HTML files
    $developer = "eat";
    function dev_url($dev) {
      return "https://www.dev.com/$dev";
    }
    include 'footer.php';
  ?>
</body>

</html>