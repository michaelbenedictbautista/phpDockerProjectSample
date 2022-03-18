<?php
// // echo "hello world";
// // phpinfo();
// // $myvar = 20;
// // $myname = "Michael";
// // echho $myname . " " . $myvar;
// $user = getenv("dbuser");
// $pass = getenv("dbpass");

// echo"username is $user";
// echo "<br>";
// echo"password is $pass";
// echo "<br>";
// echo "<br>";

// Two types of array
// 1. Indexed array type
$items =  array();
array_push($items, "apples");
array_push($items, "oranges");
print_r($items);
echo "<br>";

// Associative array
$car = array();
$car['make'] = 'Toyota';
$car['model'] = 'Camry';
$car['year'] = '2021';
print_r($car);
echo "<br>";

// first item apple
echo "First item is " . $items[0];
echo "<br>";

// car make is toyota
echo "The car make is..................... " . $car["make"];
?>

