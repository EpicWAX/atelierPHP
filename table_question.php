<?php
	include("ini.php");
	
	$randnumber = rand(1, 10);
	echo("my rand n = ".$randnumber." thank you<br/>");

	function testun($table, $randnumber)
	{
	echo("my rand n = ".$randnumber." thank you<br/>");
		$result = $randnumber * $table;
		echo("my result = ".$result." thank you<br/>");
		echo("Combien font ".$randnumber." * ".$table."");
		return ($result);
	}

	$res = testun($_POST['tables'], $randnumber);
	echo("<br/>-------------wesh----------------------->".$res."<br/>");

	// function testun_solver($_POST['awnser'], $res)
	// {
	// 	return(($res == $_POST['awnser']) ? echo("wesh pk pas") : echo("wesh non"));
	// }
?>