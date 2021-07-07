<?php
session_start ();
if(isset ($SESSION["name"]));
    $_SESSION["name"] = "platypus";
if (isset($_GET['name'])){
    $name = $_GET['name'];
    if ($name)
    $_SESSION["name"] = $name;
    setcookie('name', $name);
}
echo "Hello " . $_SESSION["name"];
?>