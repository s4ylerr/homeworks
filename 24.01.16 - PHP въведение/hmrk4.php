<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>hmkr4</title>
	<style type="text/css">

		table {
			background-color: #9B9A9A;
		}
		#text {
			color: black;
		}
		#one {
			color: #FA0309;
		}
		#two {
			color: #FA05E6;
		}
		#three {
			color: #1705FF;
		}
		#four {
			color:#01F8E4;
		}
		#first {
			color: #0BF905;
		}
		#second {
			color: #FBEC00;
		}
		#third {
			color: #841A58;
		}
		#fourth {
			color: #F79516;
		}
		 




	</style>
</head>
<body>
		<?php
		header('content-type:text/html;charset=utf-8');
		echo '<table border=1 >
			<tr>
				<td id= text>Фигура</td>
				<td id= text>Лице</td>
				<td id= text>Периметър</td>
			</tr>
			<tr>
				<td id= text>Триъгълник</td>
				<td id= one > S = &frac12 (a.ha) = &frac12 (b.hb) = &frac12 (c.hc)</td>
				<td id= first> P = a + b + c</td>
			</tr>
			<tr>
				<td id= text>Квадрат</td>
				<td id= two > S = а . а = а&sup2 </td>
				<td id= second> P = а + а + а + а = 4 .а</td>
			</tr>
			<tr>
				<td id= text>Правоъгълник</td>
				<td id= three> S = a . b </td>
				<td id= third> P = (2 . a)+(2 . b)</td>
			</tr>
			<tr>
				<td id= text>Трапец</td>
				<td id= four> S = &frac12 (a + b) .h</td>
				<td id= fourth > p = a + b + (2 . c)</td>
			</tr>
		</table>'




		?>
</body>
</html>