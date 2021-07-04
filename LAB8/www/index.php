<?php

echo "Hello World!!";

$a = 5;
$b = "KO";
$c = 8.32;

echo $a . $b;
echo "<br>";
echo $b . $c;
echo "<br>";
echo $c + $a;
echo "<br>";

$array = array(5,8.55,"KO");
echo $array[1] . "<br>";
echo $array[2] . "<br>";
var_dump($array);

$array = array(array(4,5),8,"ITBRU");
var_dump($array);
echo $array[0][1] . "<br>";

// Json
$json = array("A","B",3);
$jObj = json_encode($json);
var_dump($json);

echo "<br>";
$array = array("one"=>"Mon","two"=>"Tue","three"=>"Fri");
var_dump($array);
echo $array["two"] . "<br>";

echo "<br>";
$jStr = json_encode($array);
var_dump($jStr);

echo "<br>";
$jObj = json_decode($jStr);
echo $jObj->one . "<br>";

////////////// control //////////////

if($a == "KO")
{
    echo "TRUE";
}
else
{
    echo $a;
}
echo "<br>";
// Short term of if

echo ($b == "ko")?"TRUE":$b;

echo "<br>";
for($i = 0; $i < 5; $i++)
{
    echo $i . ".) KO <br>";
}

echo "<br>";
foreach($jObj as $key => $val)
{
    echo $key .":" . $val . "<br>";
}

echo "<br>";
$i = 0;
while($i < 5)
{
    echo $i++ . "<br>";
}

echo "<br>";
try
{
    $i = 10;
    echo $i/0;
    include "conDB.php";
}
catch(Exception $e)
{
    $e->getMessage();
}
?>