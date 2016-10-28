<?php
include_once('/var/CAS-1.3.4/CAS.php');

phpCAS::setDebug('/home/yourls_fordham/fordh.am/cas_log');

// initialize phpCAS
phpCAS::client(CAS_VERSION_2_0, 'loginp.fordham.edu', 443, '/cas');
//phpCAS::setCasServerCACert('/etc/openldap/certs/cas.pem');

phpCAS::setNoCasServerValidation();
if (isset($_REQUEST['logout'])) {
    phpCAS::logout();
}

//if (isset($_REQUEST['login'])) {
phpCAS::forceAuthentication();
//}

// check CAS authentication
$auth = phpCAS::checkAuthentication();
$isauth =  phpCAS::isSessionAuthenticated();
// for this test, simply print that the authentication was successful

//if($auth || $_GET['ticket'].length > 0 || isset($_COOKIE['ticketjaduuat']))
if (!$auth)
{
yourls_redirect('https://loginp.fordham.edu');                                     
}

?>
