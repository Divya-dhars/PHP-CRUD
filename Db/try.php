<?php 
$a=$_POST['a'];
switch($a){
    case 'insert':
        include 'insert.html';
        break;
    case 'select':
        include 'select.php';
        break;
    case 'delete':
        include 'delete.html';
        break;
    case 'update':
        include 'update.html';
        break;
    case 5:
        exit(0);
}
?>