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
public function _destruct() {
echo '</br> i\'m done';
}
}
?>
</body>
</html>
