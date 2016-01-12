<?php

if (isset($_GET['success'])) {
  $nameImage = $_POST['image'];
  $im = imagegrabscreen();
  $nameImage .= ".png";
  imagepng($im, $nameImage);
  if($im == true){
	  echo "<script>alert('Success');</script>";
	  imagedestroy($im);
  }
  
}


?>
<html>
	<body>
		<form action="print_screen.php?success" method="POST">
			<label>Name image:</label>
			<input type="text" name="image">
			<br>
			<input type="submit" value="Print">
		</form>
	</body>
</html>