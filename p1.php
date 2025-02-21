<form method="post">
enter a starting number:<input type="text" name="t1"><br><br>
enter a ending number:<input type="text" name="t2"><br><br>
<input type="submit" name="submit" value="submit">
</form>

<?php
function primenumber($mynum)
{
$n=0;
if($mynum==2||$mynum==3)
{
echo $mynum."";
}
elseif($mynum%6==1||$mynum%6==5)
{
for($i=2;$i*$i<=$mynum;$i++)
{
if($mynum%$i==0)
{
$n++;
break;
}
}
if($n==0)
{
echo $mynum."";
}
}
}
if(isset($_POST['submit']))
{
$x=$_POST['t1']; 
$y=$_POST['t2'];
echo "prime numbers".$x." and ".$y."are:<br>";
for($i=$x;$i<$y+1;$i++)
{
primenumber($i);
}
}
?>
add dhfgk