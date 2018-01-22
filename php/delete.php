<?php
require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$uid = $_GET['uid'];

$sql = mysqli_query($link, "DELETE FROM worker WHERE uid = '$uid'");
$result = mysqli_fetch_assoc($link, $sql);

header("Location:/search_worker.php");

?>