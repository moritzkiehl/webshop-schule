<?php

namespace MoritzKiehl\Webshop\Controller;

use MoritzKiehl\Webshop\Service\LoginService;

class LoginController
{
    /**
     * @var LoginService;
     */
    private $loginService;

    public function __construct()
    {
        $this->loginService = new LoginService();
    }

    public function login()
    {
        if (!empty($_POST['username']) AND !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $username = rmHtmlEnt($username);
            $password = rmHtmlEnt($password);
            if ($this->loginService->attempt($username, $password)){
                header("Location: dashboard");
            }
        }


    }

    public function logout()
    {
        $this->loginService->logout();
        header("Location: home");
    }
}