<?php
$name = 'Ben';
$string_one = "Learning to display \"Hello $name!\" to the screen\n";
$string_one = 'Learning to display '
  .'"Hello '
  .$name
  .'!" to the screen.'
  ."\n";

$string_one = 'Learning to display ';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';
//$string_one .= "\n";
// prepend to a string
//$string_one = 'I am ' . $string_one;

//echo $string_one;

$myString = <<<EOT
Example of string
spanning multiple lines
    using spaces
and including a $name variable
using heredoc syntax.\n
EOT;
echo $myString;

$isReady = true;
//var_dump($isReady);
$isReady = false;
//var_dump($isReady);

var_dump(1 + "2");

$a = 10;
$b = '10';

var_dump($a == $b);
var_dump($a === $b);

//$string_one = "";
if ($string_one == 'Learning to display "Hello Ben!" to the screen.') {
  echo 'the values match';
} else if($string_one == "") {
  echo '$string_one is empty';
} else {
  echo 'the values DO NOT match';
}
?>
