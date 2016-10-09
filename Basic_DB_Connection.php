<?php

	global $runnerID;
	global $position;
	global $eventID;
	global $categoryID;
	global $ageGrade;
	global $pb;
	global $finishTime;
	global $date;
	global $conn;

function dbConnectAndDataInput() {

	$myServer = "localhost";
	$myUser = "dm25369";
	$myPass = "7gGjRfTZ";
	$myDB = "dm25369_db"; 

	//connection to the database
	$conn = new mysqli($myServer, $myUser, $myPass, $myDB);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$runnerID = $_POST['RunnerID'];
	$position = $_POST['Position'];
	$eventID = $_POST['EventID'];
	$categoryID = $_POST['CategoryID'];
	$ageGrade = $_POST['AgeGrade'];
	$pb = $_POST['PB'];
	$finishTime = $_POST['FinishTime'];
	$date = $_POST['Date'];


	$sql="INSERT INTO Results (RunnerID,Position,EventID,CategoryID,AgeGrade,PB,FinishTime,Date)
	VALUES
	('$runnerID','$position','$eventID','$categoryID','$ageGrade','$pb','$finishTime','$date')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

function runnerIDValidation($data) {
	
	return $data;
}

function positionValidation($data) {
	if(empty($data)){
		 $data = -1;
		 return $data;
	} else {
		return $data;
	}
}

function eventIDValidation($data) {
	if($data <= 0 || $data >= 9999){
		echo "there is an error here, please alter";
	} else {
		return $data;
	}
}

function categoryIDValidation($data) {
	if(empty($data)) {
		$data = -1;
		return $data;
	} else {
		return $data;
	}
}

function pbValidation($data) {
	if(empty($data)) {
		$data = 0;
		return $data; 
	} else {
		if($data <0 || $data > 1) {
			echo "invalid input";
		} else {
			return $data;
		}
	}
}


?>