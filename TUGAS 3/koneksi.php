<?PHP

$host= "localhost";
$user= "root";
$pass= "";
$name= "modul6";

$koneksi= mysqli_connect($host, $user, $pass) or die("koneksi ke database gagal");
mysqli_select_db($koneksi,$name);

?>