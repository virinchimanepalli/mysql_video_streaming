<?php

$con = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($con, "demo");

if(isset($_POST['submit']))
{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	
	move_uploaded_file($temp,"uploaded/".$name);
	//$url = "http://127.0.0.1/PHP/video%20upload%20and%20playback/uploaded/$name";
	$query = "INSERT INTO `video` (`id`, `name`) VALUES ('', '$name')";
	// mysqli_query($con, "INSERT INTO `video` VALUE ('','$name','$url')");
	mysqli_query($con, $query); 
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video Upload And Playback Tutorial</title>
</head>

<body>

<a href="video.php">Video</a>
<form action="index_video.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file" />
    <input type="submit" name="submit" value="Upload!" />
</form>

<?php

if(isset($_POST['submit']))
{
	echo "<br/>".$name." has been uploaded";
}

?>

</body>
</html>