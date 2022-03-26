<?php 
$flag1=$_POST['flag1'];
$flag2=$_POST['flag2'];
$flag3=$_POST['flag3'];
$flag4=$_POST['flag4'];
$flag5=$_POST['flag5'];
$flag6=$_POST['flag6'];  

if ($flag1 ==='learning' && $flag2 ==='how' && $flag3 ==='to' && $flag4 ==='hack' && $flag5 ==='is' && $flag6 ==='fun') {
  echo "<h1>Congratulaions you have completed the challeng</h1>";
}else {
  echo "<h1>you failed go back</h1>";
}
?>
