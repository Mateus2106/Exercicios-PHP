<html>
	<head>

	</head>

	<body>
		<?php

			echo "|------------Exercicio 1----------------|<br>";
			for($i=0;$i<10;$i++)
			{
				$x[$i]=rand(10,100);
			}
			foreach($x as $y) 
			{
				echo $y."<br>";
			}

			echo "-------------------------------------------<br>";
			echo "<br>|------------Exercicio 2----------------|<br>";

			$j=rand(20,50);
			for($i=0;$i<=$j;$i++)
			{
				$k[$i]=rand();
			}

			foreach ($k as $l) 
			{
				echo $l."<br>";
			}

			echo "-------------------------------------------<br>";
			echo "<br>|------------Exercicio 3----------------|<br>";

			$m=0;
			for($i=0;$i<=$j;$i++) 
			{
				if($k[$i]%2==0)
				{
					echo $k[$i]."<br>";
					$s[$m]=$k[$i];
					$m++;					
				}
			}

			echo "-------------------------------------------<br>";
			echo "<br>|------------Exercicio 4----------------|<br>";
			
			asort($s);
			foreach ($s as $a) 
			{
				echo $a."<br>";
			}

			echo "-------------------------------------------<br>";
		?>
	</body>
</html>