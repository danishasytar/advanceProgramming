<?php 
include '../conn.php';


$pic_id = $_GET['id'];





$arr = (explode(",",$pic_id));

$picture_id = $arr[0];
$person_id= $arr[1];




$sql = "DELETE FROM Pictures WHERE id ='".$picture_id."';";
$result = mysqli_query($conn, $sql);








$url = "Admin_edit.php?edit_btn=".$person_id ; 

header('Location: '.$url);

?>