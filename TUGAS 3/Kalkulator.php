<!DOCTYPE HTML>
<html>
<head>
<title>Kalkulator Logic dan Aritmatika</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">\
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@1,500&display=swap" rel="stylesheet">
<script src="script.js"></script>
</head>

<body>
 <div class="bg"></div>
		<div class="main">
			<h2>Kalkulator Biasa</h2>
			<form name="form">
				<input class="textarea" name="textarea">
			</form>
				<table>
					<tr>
						<td><input class="button" type="button" value="C" onclick="kosong()"></td>
						<td><input class="button" type="button" value="DEL" onclick="hapus()"></td>
						<td><input class="button btn-black" type="button" value="/" onclick="insert(' / ')"></td>
						<td><input class="button btn-black" type="button" value="x" onclick="insert(' * ')"></td>
					</tr>
					<tr>
						<td><input class="button" type="button" value="7" onclick="insert(7)"></td>
						<td><input class="button" type="button" value="8" onclick="insert(8)"></td>
						<td><input class="button" type="button" value="9" onclick="insert(9)"></td>
						<td><input class="button btn-black" type="button" value="-" onclick="insert(' - ')"></td>
					</tr>
					<tr>
						<td><input class="button" type="button" value="4" onclick="insert(4)"></td>
						<td><input class="button" type="button" value="5" onclick="insert(5)"></td>
						<td><input class="button" type="button" value="6" onclick="insert(6)"></td>
						<td><input class="button btn-black" type="button" value="+" onclick="insert(' + ')"></td>
					</tr>
					<tr>
						<td><input class="button" type="button" value="1" onclick="insert(1)"></td>
						<td><input class="button" type="button" value="2" onclick="insert(2)"></td>
						<td><input class="button" type="button" value="3" onclick="insert(3)"></td>
						<td rowspan=2><input style="height:180px;" class="button btn-black" type="button" value="=" onclick="hasop()"></td>
					</tr>
					<tr>
						<td><input class="button" type="button" value="0" onclick="insert(0)"></td>
						<td><input class="button" type="button" value="00" onclick="insert('00')"></td>
						<td><input class="button" type="button" value="." onclick="insert('.')"></td>
					</tr>
				</table>
			
		</div>
	</div>
	
   
  </div>
  
