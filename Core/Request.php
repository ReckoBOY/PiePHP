<?php
namespace Core;

use Model\UserModel;
use Core\Controller;

class Request
{
    static public $salt = 'vive le roi clément';
    private $tabsecu = [];

    
    function postsecu($tab)
    {
        foreach($tab as $key => $value)
        {
        extract($tab);

            if ( preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $mail ))
            {
                $secuOne = trim($mdp);
                $secutwo = stripslashes($secuOne);
                $secuThree = htmlspecialchars($secutwo, ENT_QUOTES);
                $secuMdp = $secuThree;

                $tabsecu = array(
                    "mdp" => $secuMdp,
                    "email" => $mail,
                ); 
                // echo 'Mot de passe conforme';
            } else {
                echo 'Mot de passe non-conforme';
                echo "- de 8 à 15 caractères
                - au moins une lettre minuscule
                - au moins une lettre majuscule
                - au moins un chiffre
                - au moins un de ces caractères spéciaux: $ @ % * + - _ !
                - aucun autre caractère possible: pas de & ni de { par exemple)";             
                echo "L'adresse eMail n'est pas valide";
            }
        
        // var_dump($tabsecu);
        return $tabsecu;
        }
    }
}
