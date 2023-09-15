<?php

if (isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    setcookie('theme', $theme, time() + 3600 * 24 * 30);
    $_SESSION['theme'] = $theme;
} elseif (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
} elseif (isset($_SESSION['theme'])) {
    $theme = $_SESSION['theme'];
} else {
    $theme = 'light';
}


?>