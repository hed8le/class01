<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<!-- PHP Coding -->
	<?php  
		class Sid {
			public $a;
			public function ausgeben($b = array()) {
				if(empty($b)){
					echo "Es zieht der Default-Parameter.";
				} else {
					echo "<br>Array-Ausgabe mit foreach-Schleife:";
					echo "<ul>";
					foreach($b as $tmp) { echo "<li>$tmp"; }
					echo "</ul>";
				}
			}
			public static function ausgabeAnzahl() {
				echo "<br>SID: P38";
			}
		}
		Sid::ausgabeAnzahl();
		$d =[5,6,7,8,"Hello"];
		echo "<br>Typ: " . gettype($d);
		$c = new Sid();
		$c->ausgeben($d);
		$e = new Sid();
		$e->ausgeben();
	?>
</body>

</html>