<?php
session_start();
session_unset();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}
session_destroy();
header("Location: http://zend-rahema.fjeclot.net/ldap/"); //Esto redirecciona a la pagina que quieras automaticamente (Se debe poner antes de cualquier cosa que se printe)
