```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) { //Check if number is numeric
      $sum += $number;
    } else {
      // Handle the error appropriately (log, throw exception, etc.)
      error_log("Non-numeric value encountered in array: " . $number);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; 
```