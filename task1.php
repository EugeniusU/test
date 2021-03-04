<?php

require_once('news11.html');

$alph = getAlph();
$str2 = text(300, $alph);
$a = $str2;

$link = "https://example.org";

$str = substr($a, 0, 180);
$lastWords = lastWs($str);

$b =  $lastWords[0] . "<a href='$link'>" . 
	  $lastWords[1] . "..." . "</a>";


function getAlph() {
	$arr = [];
	$q = 0;

	for ($j = 65; $j <= 90; $j++) {
		$arr[$q] = chr($j);
		$q++;
	}
	
	return $arr;
}

function text($len, $alph) {	
	$var = "";

	for ($i = 0; $i < $len; $i++) {
		$ch = mt_rand(0, 25);
		if ($ch % 5 == 0) {
			$var = $var . " ";
		}		
		$var = $var . $alph[$ch];	
	}
	
	return $var;
}

$allText = "<div class='allText'>" . "Весь текст" . "<br><br>" . 
			$a . "</div>";
			
echo $allText;

$smallText = "<div class='smallText'>" . "180 символов" . "<br><br>" .
			"$b</div>";

echo $smallText;

function lastWs($b) {
	$whitespace = 0;
	$last_words = 0;
	$parts = [];

	for ($i = strlen($b) - 1; $i >= 0; $i--) {
		if ($b[$i] == " ") {
			$whitespace++;
		}
		if ($whitespace == 2) {
			$last_words = $i;
			break;
		}
	}
	
	$pre = "";
	for ($i = $last_words; $i < strlen($b); $i++) {
		$pre = $pre . $b[$i];
	}
	
	$parts[0] = substr($b, 0, $last_words);
	$parts[1] = $pre;
	
	return $parts;
}

<<<_END
<h2>this</h2>
</body>
</html>
_END;

?>
