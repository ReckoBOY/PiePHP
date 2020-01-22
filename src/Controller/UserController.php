<?php
namespace Controller;

use Model\UserModel;
use Core\Controller;
use Core\Request;

class UserController extends Controller
{
    public function addAction() {
        $this->render("register");
    }

    public function logAction() {
        $this->render("login");
    }

    public function registerAction()
    {
        if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm']))
        {
            if($_POST['password'] === $_POST['password_confirm'])
            {     
                $postemail = $_POST['email'];
                $postpass = $_POST['password'];
                $tab = array(
                    "mail" => $postemail,
                    "mdp" => $postpass,
                );
                $secu = new Request;
                $securis = $secu->postsecu($tab);
                var_dump($securis);
                $secuemail = $securis['email'];
                $secupass = $securis['mdp'];

                $register = new UserModel;
                $register->setEmail($secuemail);
                $register->setPass($secupass);
                $register->save();
                echo "Vous êtes bien enregistré";
            } else {
                echo "Vous n'avez pas rentrez le même password";
            }
        } elseif(empty($_POST['email']) || empty($_POST['password'])) {
            echo "Veuillez renseignez tous les champs";
        }
    }

    public function loginAction()
    {
        if(!empty($_POST['log_email']) && !empty($_POST['mdp'])) 
        {           
            $tab = [];
            $postLogEmail = $_POST['log_email'];
            $postLogMdp = $_POST['mdp'];
            $tab = array(
                "mail" => $postLogEmail,
                "mdp" => $postLogMdp,
            );
            $secu = new Request;
            $secu->postsecu($tab);

            $login = new UserModel;
            $login->setEmail($postLogEmail);
            $login->setPass($postLogMdp);
            $tabid = $login->get_id();
            $tabid = $tabid['id'];
            $login->setId($tabid);
            $login_user = $login->get_user();

            if(array_count_values($login_user) > 0){
                echo "vous etes bien connecté";
            } else {
                echo "Ce profil n'existe pas";
            }
        } else {
            echo "Veuillez renseignez tous les champs";
        }
    }
}

