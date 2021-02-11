<?php
// print_r(get_loaded_extensions());
session_start();
$_SESSION['color']='red';
echo "the color".$_SESSION['color'];
?>