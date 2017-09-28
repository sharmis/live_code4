<?php
echo "<h1>Welcome to IS218</h1>";
echo "<h2>Comparison</h2>";

echo "<h3>PHP type coercion rules</h3>";
var_dump(NULL <> "test");
echo "<br>";
var_dump(True <> 12);
echo "<br>";
var_dump(NULL <> 12);
echo "<br>";
var_dump(100 <> '100');
echo "<br>";
var_dump('13' <> '12');
echo "<br>";
var_dump('Test' <> 'test');
echo "<br>";


echo "<h3>boolean coercion examples</h3>";
var_dump((bool) 0);  
echo "<br>";
var_dump((bool) "");  
echo "<br>";      
var_dump((bool) 1);  
echo "<br>";       
var_dump((bool) -2);  
echo "<br>";      
var_dump((bool) "foo");
echo "<br>";     
var_dump((bool) 2.3e5);    
echo "<br>"; 
var_dump((bool) array(12)); 
echo "<br>";
var_dump((bool) array());  
echo "<br>"; 
var_dump((bool) "false");  
echo "<br>";

echo "<h3>equality operators</h3>";
$x = 100;  
$y = "100";
var_dump($x == $y);
echo "<br>";

$x = 100;  
$y = "100";
var_dump($x != $y); 
echo "<br>";

$x = 100;  
$y = "100";
var_dump($x <> $y);
echo "<br>";


echo "<h3>unusual results with the equality operator</h3>"; 
var_dump(NULL == '');
echo "<br>";
var_dump(NULL == False);
echo "<br>";
var_dump(NULL == 0);
echo "<br>";
var_dump(False == '0');
echo "<br>";
var_dump(0 == '');
echo "<br>";
var_dump(0 == 'harris');
echo "<br>";
var_dump(3.5 == '\n\r3.5 mi');
echo "<br>";

echo "<h3>relational operators</h3>";
$x = 100;
$y = "50";
var_dump($x > $y);
echo "<br>";

$x = 10;
$y = 50;
var_dump($x < $y);
echo "<br>";

$x = 50;
$y = 50;
var_dump($x >= $y);
echo "<br>";

$x = 50;
$y = 50;
var_dump($x <= $y);
echo "<br>";

echo "<h3>unusual results with the relational operators
</h3>";
var_dump(0 <= 'test');
echo "<br>";
var_dump('' < 5);
echo "<br>";
var_dump(False < True);
echo "<br>";
var_dump(NULL < True);
echo "<br>";

echo "<h3>identiy operators</h3>";
$x = 100;  
$y = "100";
var_dump($x === $y);
echo "<br>";

$x = 100;  
$y = "100";
var_dump($x !== $y);
echo "<br>";

echo "<h2>Increment / Decrement</h2>";
$x = 10;  
echo ++$x;
echo "<br>";
$y = 15;  
echo $y++;
echo "<br>";
echo $y;
echo "<br>";
$z = 25;
echo ++$z+5;
echo "<br>";
echo $z++ +5;
echo "<br>";
echo "<br>";

$d = 18;
$c = 7;
echo $d-- - ++$c;
echo "<br>";
echo ++$c - --$d;
echo "<br>";

echo "<h2>Logical Operators</h2>";
$x = 100;  
$y = 50;
if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
echo "<br>";
$x = 100;  
$y = 50;
if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
echo "<br>";
$x = 100;  
$y = 50;
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
echo "<br>";

$x = 100;  
$y = 50;
if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
echo "<br>";
$x = 100;  
$y = 50;
if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
echo "<br>";

$x = 100;  
if (! ($x != 90) ) {
    echo "Hello world NOt";
}
echo "<br>";

echo "<h2>Array Operators</h2>";

$arr = array('I','Love','Web','Application');
echo implode(" ",$arr)."<br>";
echo implode("+",$arr)."<br>";
echo implode("-",$arr)."<br>"; 
echo implode("*",$arr)."<br>";

echo "<br>";
$str = "I Love Web Application";
//zero limit
print_r(explode(" ",$str,0));
echo "<br>";
//positive limit
print_r(explode(" ",$str,2));
echo "<br>";
//negative limit
print_r(explode(" ",$str,-1));
echo "<br>";
echo "<br>";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
print_r($x + $y); 
echo "<br>";
echo "<br>";
$num1 = range(0,3);
$num2 = range(2,7);
print_r($num1); 
echo "<br>";
print_r($num2); 
echo "<br>";
print_r($num1 + $num2); 
echo "<br>";

$first = array('one','c'=>'three');
$second = array('a'=>'fourth','c'=>'sixth','3'=>'number');

echo "<br>";
print_r($first);
echo "<br>";
print_r($second);
echo "<br>";
print_r($first + $second);
echo "<br>";

echo "<br>";
$x = array("a" => "red", "c" => "blue");  
$y = array("c" => "blue", "a" => "red");  
var_dump($x == $y);
echo "<br>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";

echo "<br>";
$x = array("a" => "1", "b" => "2");  
$y = array("a" => 1, "b" => 2);  
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";

echo "<br>";
$x = array("a" => "1", "b" => '2');  
$y = array("b" => "2", "a" => '1'); 
var_dump($x == $y);
echo "<br>"; 
var_dump($x === $y);
echo "<br>";

echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
?>
















