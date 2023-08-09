<?php 
//Je récupère les informations du User qu'il a entrée dans le formulaire via la method POST
$saisieNbrPasswd = $_POST['nbrPasswd'];
$saisieNbrCaract = $_POST['nbrCaract'];
$saisieTypePasswd = $_POST['typePasswd'];

//Je définis le les caractères à prendre en compte en fonction de l'option
if($saisieTypePasswd == '1'){
    //ici les nombres
    $caract = "0123456789";
}else if($saisieTypePasswd =='2') {
    //les lettres
    $caract = "abcdefghijklmnopqrstuvwxyz";
} else if($saisieTypePasswd =='3'){
    //les deux 
    $caract = "abcdefghijklmnopqrstuvwxyz0123456789";
} else if($saisieTypePasswd =='4'){
    //tout caractères y compris les spécials
    $caract = "abcdefghijklmnopqrstuvwxyz0123456789@!:;,$/?*£=+-";
}

//Nombre de caract que le mdp doit contenir (saisie du user)
$nb_caract = $saisieNbrCaract;

// Je fais une boucle pour générer des mdp jusqu'au nb indiqué par le user
// puis une seconde boucle pour générer le mdp caract par caract jusqu'au nb indiqué par le user
for($nbrPasswd = 1; $nbrPasswd<= $saisieNbrPasswd; $nbrPasswd++){
    for($i = 1; $i <= $nb_caract; $i++){
        /*on compte le nombre de caract
        -la function strlen permet de 
        calculer la longueur de la chaine de caractères*/
        $Nbr = strlen($caract);

        /*On choisit un caract au hasard dans la chaine sélectionnée 
        mt_rand est une fonction qui utilise un générateur aléatoire 
        de caractéristique connue*/
        $Nbr = mt_rand(0,($Nbr-1));

        /* Pour finir j'écris le resultat
        print retoune toujour 1*/
        print $caract[$Nbr];
    }
    echo "<br>";
} 
?>