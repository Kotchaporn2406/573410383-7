<?php

include 'connect.php';
$mysqli = new mysqli($servername, $username, $password, $dbname);

//if(mysqli_connect_errno()) {
	//echo "Conn Error = " . mysqli_connect_error();
//exit();
//}
//else {
	//echo "Connected successfully";

//}
$del = $_GET['id_diarytoday'];

$sql = "DELETE FROM `diary_today` WHERE `id_diarytoday` LIKE '$del'";

if ($mysqli->query($sql)) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Delete Successfully')
        window.location.href='index.php';
        </SCRIPT>");
	echo json_encode(array("status"=>"OK","Delete Successfully"));
	} 

else {
    echo json_encode(array("status"=>"FAIL","messeage"=>$mysqli->error));
}



?>