<?php

	$con = mysqli_connect('localhost','root','');
	global $con;

	if(!$con)
	{
		echo 'Not connected to Server';
	}

	if(!mysqli_select_db($con,'test'))
	{
		echo 'Database not Selected';
	}

	$butt=$_GET['button'];
	$nn='@';

	/*if ($butt=='a')
	{
		$sql1 = "INSERT INTO PEG (status,text) VALUES ('LED ON','a')";

		if(!mysqli_query($con,$sql1))
		{
			echo 'NOT INSERTED';

		}

		else
		{
			echo 'BULB ON';
		}
	}	
		
	elseif ($butt=='b')
	{
		$sql2 = "INSERT INTO PEG (status,text) VALUES ('LED OFF','b')";

		if(!mysqli_query($con,$sql2))
		{
			echo 'NOT INSERTED';

		}

		else
		{
			echo 'BULB OFF';
		}
	}
	elseif ($butt=='p') 
	{
		$sql3 = "INSERT INTO PEG (status,text) VALUES ('FAN ON','p')";

		if(!mysqli_query($con,$sql3))
		{
			echo 'NOT INSERTED';

		}

		else
		{
			echo 'FAN ON';
		}
	}
	elseif ($butt=='q') 
	{
		$sql4 = "INSERT INTO PEG (status,text) VALUES ('FAN OFF','q')";

		if(!mysqli_query($con,$sql4))
		{
			echo 'NOT INSERTED';
		}

		else
		{
			echo 'FAN OFF';
		}
	}	*/

	switch ($butt) {
		case 'A':
			$sql1 = "INSERT INTO PEG (status,text) VALUES ('LED ON','a')";

			if(!mysqli_query($con,$sql1))
			{
				echo 'NOT INSERTED';
			}

			else
			{
				$myfile = fopen("read.txt", "w") or die("Unable to open file!");
fwrite($myfile, $nn);
fwrite($myfile, $butt);

fclose($myfile);			}
			break;

		case 'B':
			$sql2 = "INSERT INTO PEG (status,text) VALUES ('LED OFF','b')";

			if(!mysqli_query($con,$sql2))
			{
				echo 'NOT INSERTED';
			}

			else
			{
					$myfile = fopen("read.txt", "w") or die("Unable to open file!");
fwrite($myfile, $nn);
fwrite($myfile, $butt);

fclose($myfile);	
			}
				
			break;

		case 'C':
			$sql3 = "INSERT INTO PEG (status,text) VALUES ('FAN ON','p')";

			if(!mysqli_query($con,$sql3))
			{
				echo 'NOT INSERTED';
			}

			else
			{
					$myfile = fopen("read.txt", "w") or die("Unable to open file!");
fwrite($myfile, $nn);
fwrite($myfile, $butt);

fclose($myfile);	
			}
			break;

		case 'D':
		
			$sql4 = "INSERT INTO PEG (status,text) VALUES ('FAN OFF','q')";

			if(!mysqli_query($con,$sql4))
			{
				echo 'NOT INSERTED';
			}

			else
			{
					$myfile = fopen("read.txt", "w") or die("Unable to open file!");
fwrite($myfile, $nn);
fwrite($myfile, $butt);

fclose($myfile);	
			}
			break;

	}
	

	header("refresh:2, url=main.html");
?>