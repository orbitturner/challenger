<!DOCTYPE html>
<html>
<head>
	<title>cours1</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width-device-width,initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="C:/wamp64/www/test1/style.css">
</head>
  <style type="text/css">
   .navbar-default{
   background-color: cyan;
   
   }
 
 </style>
<body>
      <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
       <a href="#" class="navbar-brand"></a>
    </div>
        <ul class="nav navbar-nav">
          <li><a href="#">PREMIER COURS EN PHP</a></li>
      </ul>
        
      </div>
    
    </nav>
<?php 
  echo" Le Premier Cours en PHP </br>";
           //AFFICHAGE AVEC LA COMMANDE ECHO
  echo 'Diarra mange du pain </br>';
  echo "<h3 align=\"center\">echo et la concaténation et les guillemets(\" \") et les apostrophes(' ')</h3>";/*double code*/
  echo '<h3 align="center">echo et la concaténation et les guillemets(" ") et les apostrophes(\'\')</h3>';/*simple code*/
             //DECLARATION
 //difference entre double code et simple code
  $a=6;
  echo'a = $a </br>';// affichage avec simple code on va faire une concaténation
  gettype($a);
    echo "a=$a est un: ".gettype($a)."</br>";
  echo"a = $a </br> ";
  echo'a ='.$a.'</br>';//la concaténation est représentée par un point(.)
  $a='Dieme';
  echo 'a='.$a.'est un '.gettype($a).'</br>';
  echo"a = $a </br> ";
  //TEST FLOAT
  $a=3.15;
  echo 'a='.$a.'est un '.gettype($a).'</br>';
  //TEST BOOLES
  $a=true;
  echo 'a='.$a.'est un '.gettype($a).'</br>';
  //TEST CALCUL
  $x= 10;
  $y= 20;
  $add= $x+$y;
 echo "X=$x , Y=$y alors X+Y= $add </br>";
 echo 'X= '.$x.', Y= '.$y.' alors X+Y= '.$add.'</br>';

 $z="BONJOUR";
 $add= $x+ $z;// pas de concatenation avec +
 $add= $x. $z;
 echo"add=$add";

?>

</body>
</html>