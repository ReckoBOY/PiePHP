<?php

namespace Controller;

use Model\geckoModel;
use Core\Controller;
use Core\Request;

class GeckoController extends Controller
{
    public function addAction() {
        // echo "coucou";
        $this->render("gecko");
    }

    public function geckoAction()
    {
        if(!empty($_POST['gecko_nom']))
        {
            $geckoN = $_POST['gecko_nom'];

            $register = new geckoModel;
            $register->setNom($geckoN);
            $register->save();
        } elseif(empty($_POST['gecko_nom'])) {
            echo "Veuillez renseignez tous les champs";
        }
    }
}