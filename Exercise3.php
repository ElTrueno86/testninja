<?php
$cont = 0;
for($i = 0; $i <= 5; $i++)
{
	for($j = 0; $j < $i; $j++)
	{
		echo '*';
		if($cont == $j)
		{
			echo '<br />';
			$cont++;
		}
	}
}
?>