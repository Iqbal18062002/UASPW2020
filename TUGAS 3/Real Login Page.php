<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
	  <meta name="viewport" content="width-device-width, initial-scale=1.0">
	  <link  rel="stylesheet"type="text/css"href="loginstyle.css" >
	  <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	  <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@1,500&display=swap" rel="stylesheet">
	  <title> LOGIN </title>
</head>


<body>
      <main>
	        <form method="POST" action="aksi_login.php">
			      <table class="whole">  
				  <tr>
				      <td>
					  <h1 class="typereg">LOGIN KE AKUN</h1></td>
				  </tr>
				  <tr>
				      <td><label for="Username">Username atau Email anda</label><br>
					      <input required name ="username" type="text" placeholder="Usename atau Email anda"class="input"></input>
						  <br><br>
					  </td>
				  </tr>
				  <tr>
				      <td>
					  <label for="Password">Masukkan Password Anda </label><br>
					  <input  required name ="password" type="password" placeholder="Sandi "class="input"></input>
					  </td>
				  </tr>
				  <tr>
				    <td>
					<a href="" class="logbutton">
					Lupa passwodrd?
					</a>
					</td>
				  </tr>
				  <tr>
				  	<td>
					<!--<br><input type="submit" value="login" >-->
					</td>
					<td>
					<br><br>
						<a href="Register Page.html"class="logbutton">
						Mau Daftar?
						</a>
					</td>
				</tr>
				  </table>
			</form>
		</main>
</body>
</html>