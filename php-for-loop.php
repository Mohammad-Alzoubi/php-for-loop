<?php
// echo 'for loop'
?>

<!-- answer 1 -->
<?php
for ($i=1; $i <= 10; $i++) { 
    echo "$i-";
}
// echo substr($i,-1);
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 2 -->

<?php
$sum = 0;
for ($i=0; $i < 30; $i++) { 
    $sum += $i;
}

echo "total number is $sum";
?>


<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 3 -->


<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 4 -->


<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 5 -->

<?php
$fact= 5;
$sum = 1;
for ($i=$fact; $i >0; $i--) { 
    // echo "$i*";
    $sum *=$i;
}

echo "the factorial of $fact is $sum";
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 6 -->


<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 7 -->

<?php
$txt= "OrangeAcademy";
$ch="c";
$count="0";
for($x="0"; $x< strlen($txt); $x++)
  { 
    if(substr($txt,$x,1)==$ch)
    {
    $count=$count+1;
	 }
  }
echo $count;
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 8 -->

<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>

</body>
</html>

<!-- ************************************************** -->
<!-- <?php echo '<br>'?> -->
<!-- answer 9 -->

<!DOCTYPE html>
<html>
<body>

<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<?php
for($row=1;$row<=8;$row++)
{
echo "<tr>";
for($col=1;$col<=8;$col++)
{
$total=$row+$col;
if($total%2==0)
{
echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
}
else
{
echo "<td height=30px width=30px bgcolor=#000000></td>";
}
}
echo "</tr>";
}
?>
</table>
</body>
</html>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 10 -->

<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 11-->

<?php
for ($i = 1; $i <= 50; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Fizz";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Buzz";
   }
     else
   {
     echo $i;
   }
 }
?>
<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 12 -->

<?php
$n = 5; 
echo "n = " . $n . "<br>";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "<br>";
   }
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 13 -->

<?php
 for ($row=0; $row<=7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
        if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
            echo "*";    
        else  
            echo "    ";     
	}        
  echo "<br>";
}
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 14 -->

<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
      if ($column == 1 or (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1)) or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
            echo "*";    
        else  
            echo " .";     
	}        
  echo "<br>";
}
?>


<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 15 -->

<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
     if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
            echo "*";    
        else  
            echo " .";     
	}        
  echo "<br>";
}
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 16 -->

<?php

for($i=0;$i <= 5 ;$i++)
{  
for($k=5;$k >= $i;$k--)
{  
echo "  ";  
}  
for($j=1;$j <= $i;$j++)
{  
echo "*  ";  
}  
echo "<br>";  
}  
for($i=4; $i >= 1 ;$i--)
{  
for($k=5; $k >=  $i ;$k--){  
echo "   ";  
}  
for($j=1; $j <= $i;$j++)
{  
echo "*  ";  
}  
echo "<br>";  
}

?>  
