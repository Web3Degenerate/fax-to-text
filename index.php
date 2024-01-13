<?php
//From: https://www.udemy.com/course/lets-learn-laravel-a-guided-path-for-beginners/learn/lecture/33973232#overview

// echo 2 + 2; 

echo "<h2>Double Quotes Test</h2>";

$catsName = "Meowsalot";
echo 'The name fo the cat is ' . $catsName . " and that is the truth";

//Double quotes you can interpolate variables and use special characters like \n - new line
echo "\nMy cat is called $catsName and that is the \n truth on a second line.";

echo "<br><br><hr>";

//composition - using multiple functions
function doubleMe($x) {
  return $x * 2;
}

function tripleMe($x){
  return $x * 3;
}

// echo doubleMe(10);
$ourCoolNumber = tripleMe(doubleMe(10));

if ($ourCoolNumber > 200) {
  echo 'The number is large enough';
}else{
  echo 'The number is not large enough';
}

