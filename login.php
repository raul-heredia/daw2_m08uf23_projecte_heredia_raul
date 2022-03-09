<?php
require 'vendor/autoload.php';

use Laminas\Ldap\Ldap;

if ($_POST['cts'] && $_POST['adm']) {
    $opcions = [
        'host' => 'zend-rahema',
        'username' => "cn=admin,dc=fjeclot,dc=net",
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    $ldap = new Ldap($opcions);
    $dn = 'cn=' . $_POST['adm'] . ',dc=fjeclot,dc=net';
    $ctsnya = $_POST['cts'];
    try {
        //$ldap->bind($dn, $ctsnya);
        echo "Usuari correcte";
    } catch (Exception $e) {
        echo "<b>Contrasenya incorrecta</b><br><br>";
    }
}
