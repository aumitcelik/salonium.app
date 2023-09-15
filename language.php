<?php
function isFromTurkey()
{
    $details = @json_decode(@file_get_contents("https://ipinfo.io/json"));
    if ($details && isset($details->country)) {
        $country = $details->country;
        $country = strtoupper($country);
        return ($country === 'TR');
    } else {
        return false;
    }
}

if (isset($_POST['language'])) {
    $selectedLanguage = $_POST['language'];
    setcookie('language', $selectedLanguage, time() + 3600 * 24 * 30);
    $_SESSION['language'] = $selectedLanguage;
} elseif (isset($_COOKIE['language'])) {
    $selectedLanguage = $_COOKIE['language'];
} elseif (isset($_SESSION['language'])) {
    $selectedLanguage = $_SESSION['language'];
} else {
    $selectedLanguage = isFromTurkey() ? 'tr' : 'en';
}

if ($selectedLanguage === 'tr') {
    include_once("language/tr.php");
} else {
    include_once("language/en.php");
}

?>