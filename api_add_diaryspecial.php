<?php

include 'connect.php';
$mysqli = new mysqli($servername, $username, $password, $dbname);

//if(mysqli_connect_errno()) {
//	echo "Conn Error = " . mysqli_connect_error();
//exit();
//}
//else {
//	echo "Connected successfully";
//}

$subject_diary = $_POST['subject'];
$date_time = $_POST['date'];
$story_special_ex = $_POST['story'];

    $sql =("INSERT INTO diary_special_ex (subject_diary,date_time,story_special_ex)
VALUES ('".$subject_diary."','".$date_time."','".$story_special_ex."')");

if ($mysqli->query($sql)) {
    echo json_encode(array("status"=>"OK","Record Successfully"));
	    echo json_encode(array("status"=>"OK","Record Successfully"));
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Record')
        window.location.href='page_special_ex.php';
        </SCRIPT>");
	} 

else {
    echo json_encode(array("status"=>"FAIL","messeage"=>$mysqli->error));
}
?>