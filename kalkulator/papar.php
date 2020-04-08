<!doctype html>
<html>
<head>
<title></title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body background="334.jpg">
<div align="right">
<button>sign Up</button>
</div>
<?php include 'connection.php'; ?><center>
<h1 style="font-family:Comic Sans Ms; text-align=center; font-size:20pt; color:#00FF00;">DATA KALKULATOR</h1>
<table border="1" cellpadding="8" cellspacing="0" bgcolor="white">
<tr><td>Bil.</td><td>Data</td></tr>
<?php 
                  
                   $display = mysqli_query($connect, 'SELECT * FROM output');
                   while ($result=mysqli_fetch_array($display)) 
	                 	{
							echo "
                                  <tr>
                                  <td align='center'>".$result['bil']."</td>
                                  <td align='center'>".$result['data']."</td>
                                  </tr>
		                         ";
                        }
             ?>
</center></body>
</html>