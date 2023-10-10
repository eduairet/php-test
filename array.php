<?php
  $bills = array( 4.5, 9, 12.21, 900 );
  $total = 0;
  foreach ( $bills as $bill ) {
    $total += $bill;
  }
  echo "Total: $total";
  echo "<br>";
  echo "Average: " . $total / count( $bills );
  echo "<br>";
  echo "Maximum: " . max( $bills );
  echo "<br>";
  echo "Minimum: " . min( $bills );
  echo "<br>";
  echo "Sorted: " . sort( $bills );
  echo "<br>";
  echo "Reversed: " . rsort( $bills );
  echo "<br>";
  echo "Shuffled: " . shuffle( $bills );
  echo "<br>";
  echo "Count: " . count( $bills );
  echo "<br>";
  echo "First bill: " . $bills[0];
?>