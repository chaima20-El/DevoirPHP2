<?php
$email=$_POST['mail'];
$passwor=$_POST['password'];

function valid_email($add) {
if (isset($add))
{
$_POST[$add] = htmlspecialchars($add); 
if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST[$add]))
{
$commandes = file("login.txt");
$nbre_de_cdes = count($commandes);

for ($i = 0; $i < $nbre_de_cdes; $i++) {
    $ligne = explode("|", $commandes[$i]);
    if($ligne[0]==$add)
    {
        return true;
    }
    }
}
else
{
    return false;
}
}}
function valid_pass($pass) {
 
    if (isset($pass))
    {
    $_POST[$pass] = htmlspecialchars($pass); 
    if (preg_match("#^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$#",$_POST[$pass]))
    {
        $commandes = file("login.txt");
    $nbre_de_cdes = count($commandes);
    for ($i = 0; $i < $nbre_de_cdes; $i++) {
        $ligne = explode("|", $commandes[$i]);
        if($ligne[1]==$pass );
        {
            return true;
        }
        }
    }
    else
    {
        return false;
    }
    }}


    function valid_mot_email($pass,$add){
          
    $commandes = file("login.txt");
    $nbre_de_cdes = count($commandes);
    for ($i = 0; $i < $nbre_de_cdes; $i++) {
        $ligne = explode("|", $commandes[$i]);
        if($ligne[1]==$pass && $ligne[0]==$add)
        {
            return true;
        }
        else {
            return false;
        }
    }}




if(valid_pass($passwor) && valid_email($email) && valid_mot_email($passwor,$email)){
    echo "<b>L'adresse : </b> <span style=\"font-weight:bold; color:green; \"> " . $email . " est valide</span> !";
    echo "<br>";
    echo "<b>le mot de passe : </b> <span style=\"font-weight:bold; color:green; \">  " . $passwor . "</b>  est valide</span> !";

}
else{
    echo " <span style=\"font-weight:bold; color:red; \" ><b>verifier le mot de passe et  l'adresse !!!!  </b></span>";
    echo'<form action="aceuil.php" method="post">';
    echo'<input type="submit" value="repeter" />';
    echo'</form>';
}


?>

