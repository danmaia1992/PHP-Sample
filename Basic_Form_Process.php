
<?php
	include 'functions.php';
	dbConnectAndDataInput();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1"/>
<link rel="StyleSheet" href="styles.css" type="text/css" media="screen" />
</head>
<body>
<h1>Sucess! Saving Data: </h1>

<p>RunnerID = <?php echo $_POST['RunnerID']; ?> </p>

<p>EventID = <?php echo $_POST['EventID']; ?> </p>

<p>Date = <?php echo $_POST['Date']; ?> </p>

<p>FinishTime = <?php echo $_POST['FinishTime']; ?> </p>

<p>Position = <?php echo $_POST['Position']; ?> </p>

<p>CategoryID = <?php echo $_POST['CategoryID']; ?> </p>

<p>AgeGrade = <?php echo $_POST['AgeGrade']; ?> </p>

<p>PB =  <?php echo $_POST['PB']; ?> </p>

</body>
</html>

