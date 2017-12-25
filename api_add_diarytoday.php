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
$subject_diary = $_POST['subject'];
$date_time = $_POST['date'];
$story_today = $_POST['story'];


    $sql =("INSERT INTO diary_today (subject_diary,date_time,story_today)
VALUES ('".$subject_diary."','".$date_time."','".$story_today."')");

if ($mysqli->query($sql)) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Record')
        window.location.href='index.php';
        </SCRIPT>");
	echo json_encode(array("status"=>"OK","Record Successfully"));
	} 

else {
    echo json_encode(array("status"=>"FAIL","messeage"=>$mysqli->error));
}



?>