<html>
<body>
<?php
$obj = new main();
$text = "My text";
$obj->printthis($text);

$array = array(1,2,3,4,5,6,7);
$obj->printArray($array);

class main{
public function _construct(){
echo 'hello i\'m an object </br>';
}

public function printthis($text){
echo'<h1>print function demo </h1>';
print($text);
echo '<hr>;
}

public function _destruct() {
echo '<br> i\'m done';
}
}
?>

