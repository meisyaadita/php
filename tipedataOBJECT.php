<?php
	echo "___OBJECT___";
	echo "<br>";

	class hello{
		var $str;
	}

	$message = new hello();
	$message ->str="Hello World";
	echo $message ->str;
	echo "<br><br>";
?>