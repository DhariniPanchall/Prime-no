<!DOCTYPE html>
<html>
	<body>
		<?php 
			echo "Check weather given number is prime or not";
			echo "<br/>";
			$no = 29;
			if ($no > 1)
			{
				if ($no == 2) 
				{
					echo "$no is Prime Number";
				}
				else if ($no % 2 == 0)
				{
					echo "$no is not Prime Number";
				}
				else
				{
					echo "$no is Prime Number";
				}
			}
			else
			{
				echo "$no is not Prime Number";
			}
		?>
	</body>
</html>