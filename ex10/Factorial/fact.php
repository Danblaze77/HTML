<?php
$no=$_GET["t1"];
function factorial($num)
{
  if($num==0)
  return 1;
  return $num*factorial($num-1);

}
echo "Factorial of number:".factorial($no);
?>
