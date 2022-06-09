<html>
<head><title>P.H.P.</title></head>
<body bgcolor= "#A9DFBF">
<font color= "#ABB2B9"> P.H.P. </font> <br><br>

<p>
<?php
$op=$_POST['elemento'];

echo ("valor elegido: $op ! <br><br>");

if ($op<=3)
  {print ("personajes de peliculas");}
else
{print ("personajes de series");}

echo ("<br><br>");

switch($op)
{
case 1:
echo("<img src='res.png'>");
break;
case 2:
echo("<img src='dav.png'>");
break;
case 3:
echo("<img src='in.png'>");
break;
case 4:
echo("<img src='lo.png'>");
break;
case 5:
echo("<img src='she.png'>");
break;
case 6:
echo("<img src='ri.png'>");
break;
}
?> </p>

<p>

</body>
</html>
