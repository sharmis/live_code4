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



echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br>";
?>
















