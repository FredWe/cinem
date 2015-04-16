<?php echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  
<head>
 <title> Bienvenue sur ma première page web</title>
 <meta http-equiv="Content-Type" content="text/HTML; charset=iso-8859-1" />
</head>
<body>
<!-- Exercice 1 -->
<h1> Exercice 1</h1>
<!-- Exercice 1 -->
<?php
echo "<br />Avec FOR <br />";
for($i=0;$i<=10;$i++){
echo 3*$i."\t"; // ou echo (3*$i)."<br />";
}
echo "<br />avec WHILE <br />";
$j = 0;
while($j<=10){
echo 3*$j."\t";
$j++;
}
?>
<!-- Exercice 2 -->
<h1> Exercice 2</h1>
<!-- Exercice 2 -->
<?php
for($i=1;$i<=10;$i++){
echo "Table de ".$i." :\t";
for($j=0;$j<=10;$j++){
echo $i*$j."\t"; // ou echo (3*$i)."<br />";
}
echo "<br />"; // ou echo (3*$i)."<br />";
}
?>
<ol>
<?php
for($i=1;$i<=10;$i++){
echo "<li>Table de $i";
echo "<ul>";
for($j=0;$j<=10;$j++){
echo "<li>";
echo $i."x".$j." = ".$i*$j;
echo "</li";
}
echo "</ul>";
echo "</li>"; // ou echo (3*$i)."<br />";
}?>
</ol>
</body>
</html>
