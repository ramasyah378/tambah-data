<?php
$file=fopen("counter.txt","r"); 
$hitung=fread($file,filesize("counter.txt")); 
$hitung++;
//echo "Anda adalah pengunjung ke: ";
echo substr("000000",0,6-strlen($hitung)) .$hitung;
fclose($file); 
$file=fopen("counter.txt","w"); 
fwrite($file,$hitung); 
fclose($file); 
?>
