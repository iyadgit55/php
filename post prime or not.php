HTML Code
<html>
<body>
<form action="Prime.php" method="post">
Ener a Number to Check Prime:<input type="text" name="Prime"><br>
<input type="submit" value="CHECK">
</form>
</body>
</html>
PHP Code
<?php
$n=$_POST['Prime'];
$flag=0;
for($i=2;$i<=$n/2;$i++)
   { if($n % $i==0)
         {
           $flag=1;
           break;
         }
   }
if($flag==0)
   echo $n, " is Prime";
else
   echo $n, " is Not Pime";  
?>
