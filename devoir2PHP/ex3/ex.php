<?php
echo '<form action="valideDate.php" method="post">';
echo "<h1>Choisir une date </h1>";
echo"<table> \n";
echo"<tr>";
  echo"<th> Jours </th>";
  echo"<th> Mois </th>";
  echo"<th> Annee </th>";
echo"</tr>";  
echo"<tr>";
echo '<td><select name="jo">';
for($i=1; $i<=31; $i++) {
    echo '<option value="'.$i.'">'.$i.'</option>';
    
}
echo '</select></td>';
         
echo '<td><select name="mo">';
for($j=1; $j<=12; $j++) {
    echo '<option value="'.$j.'">'.$j.'</option>';
}
echo '</select></td>';
echo '<td><select name="an">';
for($k=1950; $k<=2020; $k++) {
    echo '<option value="'.$k.'">'.$k.'</option>';
}
echo'</select></td>';
echo"<tr>";
echo"</table> \n";
echo"<p>";

echo'<input name="envoyer" type="submit" id="envoyer" value="Envoyer">';

echo"</p>";
echo '</form>';
?>