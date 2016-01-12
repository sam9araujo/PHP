<?php
$bdHost = '127.0.0.1';
$bdUser = 'root';
$bdPassword = '';
$bdBase = 'task';

$connect = mysqli_connect($bdHost, $bdUser, $bdPassword, $bdBase);
	
if (mysqli_connect_errno()) {
    echo "No Connect :(";

    die();
}else{
	echo"Success! :D";
}
?>