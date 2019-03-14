<?php
if (!isset($_SESSION["login"])) {
    echo "<div class=\"footer\">
    <div class=\"container footer-container\">
        <form method=\"post\" action=\"\" name=\"loginForm\">
            <input type=\"text\" name=\"username\" placeholder=\"Nutzername\">
            <input type=\"password\" name=\"password\" placeholder=\"Passwort\">
            <input type=\"submit\" name=\"login\" value=\"Einloggen\">
        </form>
    </div>
</div>";
} else {
    echo "<div class=\"footer\">
    <div class=\"container footer-container\">
        <p>Footer</p>
        <form method=\"post\"  name=\"logoutForm\">
            <input type=\"submit\" name=\"logout\" value=\"Ausloggen\">
            <input type=\"submit\" name=\"dashboard\" value=\"zum Dashboard\">
        </form>
    </div>
</div>";
}


if (isset($_POST['login'])) {
    $loginController = new \MoritzKiehl\Webshop\Controller\LoginController;
    $loginController->login();
}
if (isset($_POST['logout'])) {
    $loginController = new \MoritzKiehl\Webshop\Controller\LoginController;
    $loginController->logout();
}
if (isset($_POST['dashboard'])&& $pathInfo !== "/dashboard") {
    header("Location: dashboard");
}
?>