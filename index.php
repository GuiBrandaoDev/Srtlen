<?php
	$count = "Guilherme";
	echo StrLen("$count");
	
	echo "<br>";
	
	$count1 = "Guilherme Brandao"; // com acento o $count conta como 3 palavras mesmo tendo apenas 2 nesse caso
	
	echo Str_Word_count($count1).'<br>';
	'<hr>';
	echo $count1;
?>