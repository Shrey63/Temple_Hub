<?php
$connect = mysqli_connect("sql212.epizy.com","epiz_29783927","ojHi6lbhuSoh","epiz_29783927_Mahadev_ondatabase")
or die (mysqli_error($connect));
if($connect)
echo"databse connected";
else
echo"error";
?>