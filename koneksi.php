<?php
$host       ="localhost";
$user       ="root";
$password   ="";
$database   ="uprak1_pwpb";
$conn    =mysqli_connect($host,$user,$password,$database) or die("Gagal Menghubungkan");

if (!$conn) {
   echo 'Gagal Menghubungkan';
}else{
   // echo  'Connect successfully!';
}

?>

