<?php

namespace MoritzKiehl\Webshop\Service;

use MoritzKiehl\Webshop\Database\Database;
use MoritzKiehl\Webshop\Domain\Model;

class LoginService
{
    public function check()
    {
        if (isset($_SESSION['login'])) {
            return true;
        } else {
            header("Location: login");
            die();
        }
    }

    public function attempt($username, $password)
    {
        $username = rmHtmlEnt($username);
        $user = null;
        $stmt = Database::getDatabase()->prepare("SELECT * FROM  customer WHERE username = ?");
        if ($stmt->bind_param('s', $username)) {
            $stmt->execute();
            $user = $stmt->get_result()->fetch_assoc();
        } else {
            return false;
        }
        if (empty($user)) {
            return false;
        }

        if (password_verify($password, $user["Password"])) {
            $_SESSION['login'] = $user["Username"];
            header("Refresh:0");
            session_regenerate_id(true);
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        unset($_SESSION['login']);
        header("Refresh:0");
        session_regenerate_id(true);
    }
}

?>
