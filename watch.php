<?php

$con = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($con, "demo");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video Upload And Playback Tutorial</title>
</head>

<body>

<?php

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = mysqli_query($con, "SELECT name FROM `video` WHERE id='$id'");
	while($row = mysqli_fetch_assoc($query))
	{
		$name = $row['name'];
		//$url = $row['url'];
	
	
	echo "You are watching ".$name."<br />";
	echo "$name";
	echo "<video width='400 controls><source src='uploaded/".$name."' type='video/webm'></video>";
	//echo "<embed src='$url' width='700' height='900'></embed>";
	}
}
else
{
	echo "Error!";
}

?>

</body>
</html>