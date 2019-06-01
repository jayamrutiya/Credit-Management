<?php

$conn = mysqli_connect("localhost", "root", "", "tsf");
if (!$conn) {
	echo mysqli_error($conn);
}
else{
	echo "";
}

?>