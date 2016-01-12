<?php
if (isset($_GET['success'])) {
    echo 'Thanks! :)';
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="iso-8859-1">
    <title>Web Site [Name Company]</title>
    </script>
</head>
<body>	

<form action="send.php" method="post">
<label>Name:</label><br/>
<input name="name" type="text" class="form-control" id="name">
<br/>
<label>Phone:</label><br/>
<input name="phone" type="number" class="form-control" id="phone">
<br/>
<label>Email:</label><br/>
<input name="email" type="email" class="form-control" id="email">
<br/>
<label>Message:</label><br/>
<textarea name="message" rows="4" class="form-control" id="message"></textarea>
<br/>
<input type="submit" value="Send" class="form-control">

</form>

</body>
</html>