<?php
$name = NULL;
if (isset($name) != NULL)
    $name = $_GET["name"];
if($name) {
    echo "Hello" .$name;
}
else{
    echo "Hello platypus";
}
?>