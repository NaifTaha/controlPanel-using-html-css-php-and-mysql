<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Control Panel</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<style>

.glyphicon {
	font-size:10rem;
	padding:15px;
}

.glyphicon:hover {
	transition: background-color 0.5s linear;
	background-color: yellow;
}

.padding {
	padding-top:20px;
	padding-bottom:10px;
}

button {
	background-color: #f44336;
	padding:0;
}

</style>

</head>

<body>
<form action="index.php" method="post">
<div class="container text-center padding">

<div class="row"> 
	<button type="submit" name="btn" value="up"><span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span></button>
</div>

<div class="row "> 
		<button type="submit" name="btn" value="left"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span></button>
		<button type="submit" name="btn" value="stop"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></button>
		<button type="submit" name="btn" value="right"><span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></button>
</div>

<div class="row"> 
	<button type="submit" name="btn" value="down"><span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></button>
</div>

</div>
</form>
<h3 class="text-center padding"> Created and devloped by: Eng.Naif </h3>

</body>
</html>

<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dataBaseName = "khalid";

$conn = mysqli_connect($serverName,$userName,$password,$dataBaseName);

if (!$conn) {
	die("connection failed:".mysqli_connect_error());
}

//echo $_POST['btn'];
	//$btn = mysqli_real_escape_string($conn, $_POST['btn']);
	$btn =  $_POST['btn'];
    $query= "INSERT INTO `hrakh` (`Harkh`) VALUES ( '$btn' )";
    $conn->query($query);
    $conn->close();

?>
