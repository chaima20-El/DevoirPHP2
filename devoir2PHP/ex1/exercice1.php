
<?php


function explode2($ch,$d){
$tab=[];
$i=0;
$tmp="";

for($i=0;$i<=strlen($ch);$i++){
   
 if($ch[$i]!=$d)
 $tmp.=$ch[$i];   
else 
{
   array_push($tab, $tmp);
    $tmp="" ;
}
}
array_push($tab, $tmp);
 print_r($tab);
 }
 
 $cha="bonjour|monsieur|ahmed";
 explode2($cha,"|");
?>

