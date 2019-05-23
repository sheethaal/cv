<?php
session_start();
?>
<html>
<head>
<title>Fantastica</title>
</head>
<body link="black" vlink="black" bgcolor="#fbecab"> 
<img src="posterrrr.jpg" align="left" width="260" heigth="260">
<br>
<br>
<marquee direction= "down"> <b> <font color= "red" size= "5" face= "Book Antiquar"> LIVE THE THRILLS! </marquee> </b> </font>
<br>
<br>
<?php
if(isset($_SESSION['visit']))
{
$_SESSION['visit]= $_SESSION['visit']+1;
}
else
{
$_SESSION['visit']=1;
}
echo " WE ARE HAPPY TO ANNOUNCE THAT YOU'RE OUR".$_SESSION['visit'].
?>
</body>
</html>