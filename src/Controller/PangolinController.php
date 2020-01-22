<?php
namespace Controller;

use Model\UserPangollin;
use Core\Controller;

class UserPangollin extends Controller
{
    public function registerAction()
    {
        $pangollin = "guillaume";
 
        $regiPango = new UserPangollin;
        $regiPango->setPass($pangollin);
        $register->save();
    }
}
