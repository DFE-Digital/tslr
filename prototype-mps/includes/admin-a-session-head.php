<?php 

 // starting the session
 session_start();

 if (isset($_POST['worked'])) { 
 $_SESSION['worked'] = $_POST['worked'];
 } 
?>

<?php 
 if (isset($_POST['intent'])) { 
 $_SESSION['intent'] = $_POST['intent'];
 } 
?>

<?php 
 if (isset($_POST['qts'])) { 
 $_SESSION['qts'] = $_POST['qts'];
 } 
?>

<?php 
 if (isset($_POST['split'])) { 
 $_SESSION['split'] = $_POST['split'];
 } 
?>

<?php 
 if (isset($_POST['undergraduate'])) { 
 $_SESSION['undergraduate'] = $_POST['undergraduate'];
 } 
?>

<?php 
 if (isset($_POST['itt'])) { 
 $_SESSION['itt'] = $_POST['itt'];
 } 
?>

<?php 
$intent = $_POST['intent'];
$worked = $_POST['worked'];
$split = $_POST['split'];
$undergraduate = $_POST['undergraduate'];
$itt = $_POST['itt'];
$qts = $_POST['qts'];
?>
