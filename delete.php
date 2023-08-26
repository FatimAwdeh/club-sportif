<?php
require_once 'connectio.php';
$idEvent=$-GET['Event ID'];
$query2="DELETE FROM calendar where EventID=$idEvent ";
$result2=mysqli_query($con,$query2);
header('location:index.html');
?>