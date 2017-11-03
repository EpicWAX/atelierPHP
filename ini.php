			<?php
				// function lolcat($salut)
				// {
				// 	echo("combien font 2*13124356457674 #kal kule men tale?");
				// 	$machin = $_POST["chinma"];
				// 	if (machin == chinma)
				// 		echo("WESH T TROP FORT!");
				// 	else
				// 		echo("bhouuuuu t nul.");
				// }

				// function testun($table)
				// {
				// 	$randnumber = rand(1, 10);
				// 	echo("my rand n = ".$randnumber." thank you<br/>");
				// 	$result = $randnumber * $table;
				// 	echo("my result = ".$result." thank you<br/>");
				// 	echo("Combien font ".$randnumber." * ".$table."");
				// 	// $reponsevar = $_POST["awn"];
					
				// }


				function for_each_tab()
				{
					foreach ($_POST['checkboxvar'] as $value)
					{
						tab_mult($value);
						echo("<br/>");
					}
				}

				function tab_mult($table)
				{
					$n = 0;
							
					while (++$n < 11)
						echo($n."*".$table." = ".$n*$table."<br/>");
				}

				/*function borabbit($value)
				{
					return ($value < 2 ? $value : fiborabbit($value-1) + fiborabbit($value-2));
				}

				function cesar_algo()
				{

				}

				function trouvelastr($value)
				{
					$str_o = "salut c'est cool?";
				}*/

			?>