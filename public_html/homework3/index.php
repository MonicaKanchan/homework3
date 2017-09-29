<html>
<body>
<?php
$obj = new main();
$text = "My text";
$obj->printthis($text);

$array = array(1,2,3,4,5,6,7);
$obj->printArray($array);

$array1 = array("Monica","Nehal");
$array2 = array("Shriya","Ankita","Meetali");
$obj->mergeArray($array1,$array2);

$array3 = array(1, "Hello", 1, "beautiful", "Hello");
$obj->array_count_values($array3);

$obj->array_product($array);

$obj->array_push();

$array4= array(2,4,6,8,0);
$obj->array_sum($array4);

$obj->array_slice();

$obj->asort();

$obj->natsort();

$obj->array_fill();

$obj->compact();

$str= 'Monica';
$str1= 'I love pizza and subway sooo much';

$obj->stringLength($str);

$obj->stringRepeat($str);

$obj->stringReverse($str);

$obj->stringUpper($str);

$obj->stringPadding($str); 

$obj->stringLower($str);

$obj->stringShuffle($str);

$obj->strWordCount($str1);

class main{
public function _construct(){
echo 'hello i\'m an object </br>';
}

public function printthis($text){
echo'<h1>print function demo </h1>';
print($text);
echo '<hr>';
}
public function printArray($array){
echo '<h1>array print function</h1>';
print_r($array);
echo'<hr>';
}

public function mergeArray($array1,$array2){
echo '<h1>array merge function</h1>';
echo '</br>Array 1</br>';
print_r($array1);
echo '</br>Array 2</br>';
print_r($array2);
echo '</br>Merged array</br>';
$result= array_merge($array1,$array2);
print_r($result);
echo '<hr>';
}

public function array_count_values($array3){
echo '<h1>Count Array values</h1>';
echo '</br>Array 3</br>';
print_r($array3);
echo '</br>Count Array Values</br>';
$result1= array_count_values($array3);
print_r($result1);
echo '<hr>';
}

public function array_product($array){
echo '<h1>Product of array</h1>';
echo '</br>Array used:</br>';
print_r($array);
echo '</br>Product of array</br>';
$result2= array_product($array);
print_r($result2);
echo '<hr>';
}

public function array_push()
{
echo '<h1>Array Push</h1>';
$a1=array("Mango","Apple");
array_push($a1, "Grape");
print_r($a1);
echo '<hr>';
}

public function array_sum($array4){
echo '<h1>Array Sum</h1>';
echo '</br> Array used:</br>';
print_r($array4);
$result3= array_sum($array4);
print_r($result3);
echo '<hr>';
}

public function array_slice() {
echo '<h1>Array slice</h1>';
$array5= array("p","q","r","s");
array_slice($array5, 2);
print_r(array_slice($array5,2));
echo '<hr>';
}

public function asort() {
echo '<h1>Array sort</h1>';
$x1 =array("lemon", "orange", "pineapple", "apple");
asort($x1);
print_r($x1);
echo '<hr>';
}

public function natsort() {
echo '<h1>Array Natural Sort</h1>';
$array6=  $array7 = array("file23", "file10", "file46", "file2", "file18");
asort($array6);
echo '</br>Standard sorting:</br>';
print_r($array6);

natsort($array7);
echo '</br>Natural order sorting:</br>';
print_r($array7);
echo'<hr>';
}

public function array_fill() {
echo '<h1>array fill</h1>';
$array8 =array_fill(3, 4, 'Teddy');
$array9 =array_fill(-7, 5, 'Bear');
print_r($array8);
print_r($array9);
echo '<hr>';
}

public function compact() {
echo '<h1>Compact function</h1>';
$school= "NJIT";
$department= "Information Systems";
$year= "graduate";

$university=array("school","department");
$result10 =compact("year", "nope", $university);
print_r($result10);
echo '<hr>';
}

public function stringLength($str) {
echo '<h1> String length</h1>';
echo '</br>String used</br>';
print_r($str);
echo '<br>String length:</br>';
$result11 =strlen($str);
print_r ($result11);
echo '<hr>';
}

public function stringRepeat($str) {
echo '<h1>String Repeat </h1>';
$result12 =str_repeat($str,6);
print_r($result12);
echo '<hr>';
}

public function stringReverse($str) {
echo '<h1>String Reverse </h1>';
$result13 =strrev($str);
print_r($result13);
echo '<hr>';
}

public function stringUpper($str) {
echo '<h1>String to uppercase</h1>';
$result14=strtoupper($str);
print_r($result14);
echo '<hr>';
}

public function stringPadding($str){
echo'<h1>String Padding</h1>';
$result15= str_pad($str, 10,"-=", STR_PAD_LEFT);
print_r($result15);
echo '<hr>';
}

public function stringLower($str) {
echo'<h1>String to Lowercase</h1>';
$result16=strtolower($str);
print_r($result16);
echo '<hr>';
}

public function stringShuffle($str) {
echo'<h1>string Shuffle</h1>';
$result17=str_shuffle($str);
print_r($result17);
echo '<hr>';
}

public function strWordCount($str2)
{
echo'<h1>String Word Count</h1>';
$result18=str_word_count($str2);
print_r($result18);
echo '<hr>';
}

public function string
public function _destruct() {
echo '</br> i\'m done';
}
}
?>
</body>
</html>
