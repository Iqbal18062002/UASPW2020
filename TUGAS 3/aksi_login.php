<?PHP
session_start();
include('koneksi.php');
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($koneksi,"select * from user where username= '$username' and password='$password'");

$cek=mysqli_num_rows($query);

if($cek == TRUE)
{
	$_SESSION['username']=$username;
	echo "<script> alert('Login Success'); </script>";
	header ("location:index.php");
}

else{
	echo "<script> alert('Your username or password are wrong'); location= 'login.php'</script>";
}
?>	