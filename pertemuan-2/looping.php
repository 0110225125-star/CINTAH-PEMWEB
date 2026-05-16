----------Cetak bilangan 1 s/d 10--------
<?php
for($x=1; $x <= 10; $x++){
echo '<br/>Bilangan '.$x;
}
?>
<br />
----------Cetak angka 10 s/d 1--------
<?php
for($y=10; $y >= 1; $y--){
echo '<br/>Angka '.$y;
}
?>
----------Cetak bilangan 1 s/d 5--------
<?php
$x=1;
while($x <= 5){
echo '<br/>Bilangan '.$x;
$x++;
}
?>
<br />----------Cetak angka 5 s/d 1--------
<?php
$y=5;
while($y >= 1){
echo '<br/>Angka '.$y;
$y--;
}
?>
----------Cetak bilangan 1 s/d 10--------
<?php
$x=1;
do{
echo '<br/>'.$x;
$x++;
}while($x<=10);
?>