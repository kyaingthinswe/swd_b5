<?php


$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

//index => assoc
echo "<pre>";
$assoc = array_combine($fname,$age);

//assoc => keys
$keys = array_keys($assoc);
print_r($keys);

//assoc => values
$values = array_values($assoc);
print_r($values);

// get random index number for index array
var_dump($fname[array_rand($fname)]);

// get random index value for assoc
var_dump($assoc[array_rand($assoc)]);

// return number array
$numberArr = range(0,99);
echo "Array Rand ->".$numberArr[array_rand($numberArr)];
echo "<br>";
echo "Rand ->".rand(0,99);
echo "<br>";

define("NAME","hein htet zan"); //Global Define

// random text
echo "Random Text -> ".uniqid();
echo "<br>";

//encryption
echo "Random MD5 ->".md5(uniqid()); // tu tal
echo "<br>";
echo "Hash String ->".password_hash("abc",PASSWORD_DEFAULT); // ma tu top buu
$hashString = password_hash("asdf",PASSWORD_DEFAULT);
echo "<br>";
echo "Password ->".password_verify("asdf",$hashString)?"မှန်တယ်":"မှားတယ်";
echo "<br>";

//find index in index arr
$extension = array("mp3","mp4","jpg","jpeg","png");
echo "Ext ပါလား -> ".(in_array("gif",$extension)?"ပါတယ်":"မပါဘူး");
echo "<br>";

//find index in assoc
$info = array("one"=>"1","two"=>2,"three"=>3,"four"=>4);
echo "Value ပါလား -> ".(in_array("five",$info)?"ပါတယ်":"မပါဘူး");//only for value
echo "<br>";
echo "key ပါလား -> ".(array_key_exists("4",$info)?"ပါတယ်":"မပါဘူး");//only for key

//data type conversation
$str = "hello min ga lar par kyin byar";
$arr = explode(" ",$str);
print_r($arr);
echo "<br>";
echo "RAW JSON -> ".json_encode($arr);
echo "<br>";
echo "Normal String ->".implode(" . ",$arr);


//Array Sort
$indexArr = ["mango","apple","orange","banana","coconut","papaya"];
sort($indexArr); // ascending
rsort($indexArr); // descending

$assocArr = array("one"=>"1","two"=>2,"three"=>3,"four"=>4);
asort($assocArr); // value Ascending
ksort($assocArr); // key ascending
arsort($assocArr); // value descending
krsort($assocArr); // key descending
echo "<br>";

//shuffle
shuffle($indexArr);
print_r($indexArr);

//Array Construction
$start = [];
$start[0] = "something";
$start[1] = "nothing";
$start[3] = "everything";
print_r($start);

$first = [];
array_push($first,"something"); // after last index
array_push($first,"nothing");
array_push($first,"everything");
array_unshift($first,"this is unshift");// add before first index

//Array Destruction

array_pop($first); // remove index from end
array_shift($first); // remove index from start

print_r($first);

// mics
$count  = count($arr);
$startIndex = current($arr);
$lastIndex = end($arr);


