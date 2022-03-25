<?php 
$flag1=$_POST['flag1'];
$flag2=$_POST['flag2'];
$flag3=$_POST['flag3'];
$flag4=$_POST['flag4'];
$flag5=$_POST['flag5']; 

if ($flag1 ==='flag1' && $flag2 ==='flag2' && $flag3 ==='flag3' && $flag4 ==='flag4' && $flag5 ==='flag5') {
  echo "<h1>Congratulaions</h1>";
}else {
  echo "<h1>failed</h1>";
}
?>
