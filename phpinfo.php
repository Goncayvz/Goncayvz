<?php
session_start();
$_SESSION['selected_menus'] = [];
header('Location: menulerim.php');
exit()
?>