<?php
//Foi mantida a diferença de caso das variavies "Loggedin" e "loggedin" para compatibilidade com a aplicação.
$loggedInCookie = filter_input(INPUT_COOKIE, 'Loggedin');

function redirect()
{
    header("Location: http://www.google.com");
    exit();
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    redirect();
} elseif (isset($loggedInCookie) && $loggedInCookie == true) {
    redirect();
}

