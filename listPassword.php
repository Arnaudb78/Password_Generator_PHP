<?php 
//Récupère les params pour adapter aux besoins du User
$saisieNbrPasswd = $_POST['nbrPasswd'];
$saisieNbrCaract = $_POST['nbrCaract'];
$saisieTypePasswd = $_POST['typePasswd'];

// Type de caractères à prendre en compte pour générer les mots de passe (change selon les params du User)
if($saisieTypePasswd == '1'){
    $caract = "0123456789";
}else if($saisieTypePasswd =='2') {
    $caract = "abcdefghijklmnopqrstuvwxyz";
} else if($saisieTypePasswd =='3'){
    $caract = "abcdefghijklmnopqrstuvwxyz0123456789";
} else if($saisieTypePasswd =='4'){
    $caract = "abcdefghijklmnopqrstuvwxyz0123456789@!:;,$/?*£=+-";
}

//Nombre de caract que le mdp doit contenir (-saisie du user)
$nb_caract = $saisieNbrCaract;

// Je fais une boucle pour générer des mdp jusqu'au nb indiqué par le user
// puis une seconde boucle pour générer le mdp caract par caract jusqu'au nb indiqué par le user
for($nbrPasswd = 1; $nbrPasswd<= $saisieNbrPasswd; $nbrPasswd++){
    for($i = 1; $i <= $nb_caract; $i++){
        //on compte le nombre de caract
        $Nbr = strlen($caract);

        //On choisit un caract au hasard dans la chaine sélectionnée 
        $Nbr = mt_rand(0,($Nbr-1));

        // POur finir j'écris le resultat
        print $caract[$Nbr];
    }
    echo "<br>";
} 
?>