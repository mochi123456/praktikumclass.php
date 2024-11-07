<?php
//tangkap require class_Matematika.php
require_once 'class Matematika.php';

//akses static member variabel class Matematika
Matematika::$counter++;
Matematika::$counter++;
Matematika::naikanCounter();
echo 'Counter Sekarang :' . Matematika::$counter;
echo'<hr/>';

//akses static member funtion class Matematika
$x =Matematika::tambahkan(4,5);
echo "4 + 5 =$x";
echo '<hr/>';

//akses constatnta class Matematika
echo 'Nilai PHI :'. Matematika::PHI;
$luas_lingkaran = Matematika::luaslingkaran(8);
echo '<br/>luas lingkaran dengan jari-jari 8 adalah : '.$luas_lingkaran;  


echo '<hr/>';
$x =Matematika::kurangkan(35,15);
echo "35 - 15 $x";
echo '<hr/>';
?>