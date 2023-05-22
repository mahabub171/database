<?php
include('db.php');
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];

$result = mysqli_query($conn,"DELETE FROM info WHERE id=$id")
or die(mysql_error());

header("Location: display.php");
}
else

{
header("Location: display.php");
}
?>