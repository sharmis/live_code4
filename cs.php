<?php
echo "<h1>Welcome to IS218</h1>";
echo "<h2>if...else...elseif statements</h2>";

$t = 12;
if ($t < 20) {
    echo "Have a good day!<br>";
}

echo "<br>";
$t = 45;
if ($t < 20) 
    echo "Have a good night!<br>";

echo "you cannot get me!<br>";

echo "<br>";
$t=8000;
if ($t < 7000) {
    echo "This is crazy<br>";
} else {
    echo "This is good<br>";
}

echo "<br>";
$t=6000;
if ($t < 7000) {
    echo "This is crazy<br>";
} else 
    echo "This is good<br>";
echo "Now do you understand what I am talking about<br>";

// echo "<br>";
$t = rand(1,7);
echo $t;
echo "<br>";

if ($t == 1) {
    echo "Monday<br>";
} elseif ($t == 2) {
    echo "Thuesday<br>";
} elseif ($t == 3) {
    echo "Wednesday<br>";
} elseif ($t == 4) {
    echo "Thursday<br>";
} elseif ($t == 5) {
    echo "Friday<br>";
} elseif ($t == 6) {
    echo "Satday<br>";
}else {
    echo "Sunday<br>";
}
echo "<h2>nested if statements</h2>";

echo "<br>";
// assume I want to buy a car
$t=6000;//odemeter
$model = 'toyota';
if ($t < 7000) {
    if ($model=='toyota') {
        echo "I buy it<br>";
    } else{
        echo "no interest<br>";
    }
} else {
    echo "no interest<br>";
}
echo "<h2>conditional operator</h2>";

$age  = 15;
$message = ($age >= 21) ? 'Can drink<br>' : 'Cannot drink<br>';
echo $message;
echo "<br>";
if ($age >= 21) {
    echo "Can drink<br>";
}else{
    echo "Cannot drink<br>";
}

echo "<h2> switch statement</h2>";
$favcolor = "what";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!<br>";
        break;
    case "blue":
        echo "Your favorite color is blue!<br>";
        break;
    case "green":
        echo "Your favorite color is green!<br>";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!<br>";
}
echo "<br>";
$letter_grade = 'A';
switch ($letter_grade) {
    case 'A':
    // break;
    case 'B':
        $message = 'Scholarship approved.<br>';
        // break;
    case 'C':
        $message = 'Application requires review.<br>';
        // break;
    case 'D':
    case 'F':
        $message = 'Scholarship not approved.<br>';
        // break;
    default:
        echo "no match<br>";    
}
echo $message;
echo "<br>";
$label = 'a';
switch ($label) {
    case 'a':
        echo "display a<br>";
        break;
    case 0:
        echo "display 0<br>";
        break;
}
echo "<br>";
$label = 'a';
switch ($label) {
    case 0:
        echo "display 0<br>";
        break;
    case 'a':
        echo "display a<br>";
        break;
}

echo "<h2> while loop</h2>";
$x = 1; 
while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 
echo "<br>";

$x = 1; 
while($x <= 5) {
    if ($x % 2 == 0) {
        echo "The number $x is even<br>";
    } else{
        echo "The number $x is odd<br>";
    }
    $x++;
} 
echo "<br>";

$x = 1; 
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 3);
echo "<br>";

$x = 6;
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
echo "<br>";

echo "<h2> for loop</h2>";

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 
echo "<br>";

for ($x = 0; $x <= 10; $x=$x+2) {
    echo "The number is: $x <br>";
} 
echo "<br>";

for ($x = 1; $x <= 10; $x = $x *3) {
    echo "The number is: $x <br>";
} 
echo "<br>";

for ($x = 5,$y=0; $x <= 10; $x++,$y++) {
    echo "The value of x is: $x <br>";
    echo "The value of y is: $y <br>";
} 
echo "<br>";

$y=0;
for ($x = 5; $x <= 10; $x++) {
    $y++;    
    echo "The value of x is: $x <br>";
    echo "The value of y is: $y <br>";
} 
echo "<br>";

echo "<h2> foreach loop</h2>";

$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<br>";

$colors = array("red", "green", "blue", "yellow"); 
$arrlength = count($colors);

for($x = 0; $x < $arrlength; $x++) {
    echo $colors[$x];
    echo "<br>";
}
echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<br>";

echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
?>









