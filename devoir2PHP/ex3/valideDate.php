<?php

$j=$_POST['jo'];
 $m=$_POST['mo'];
 $a=$_POST['an'];
 echo "<h1>Validation de a Date </h1>"; 
     echo "La date saisie est : $j/$m/$a <br>";
     if(checkdate($m,$j,$a))
       echo "La date saisir  <span style=\" color:green; \"><b>est valider</b> </span>";
    else
       {
        echo "L'annee $a est non bessextile :";
        echo "La Date  <span style=\" color:red; \"><b> Invalider</b> </span>";
       }    


?>