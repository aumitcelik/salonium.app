<?php include_once("theme/theme.php"); ?>

<head>
    <link rel="stylesheet" type="text/css" href="theme/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<div class="navbar-left">
    <img class="logo-style"
        src="<?php echo ($theme === 'light') ? 'images/light-logo.jpg"' : 'images/dark-logo.jpg'; ?>" alt="">

    <a href="index.php">
        <i class="material-icons">home</i>
    </a>

    <a href="contact.php">
        <?php echo $lang["contact"]; ?>
    </a>
</div>

<div class="navbar-right">
    <form method="post">
        <input type="hidden" name="language" value="<?php echo ($selectedLanguage === 'en') ? 'tr' : 'en'; ?>">
        <input type="submit" value="<?php echo ($selectedLanguage === 'en') ? 'TR' : 'EN'; ?>">
    </form>

    <form method="post">
        <input type="hidden" name="theme" value="<?php echo ($theme === 'light') ? 'dark' : 'light'; ?>">
        <?php if ($theme === 'light'): ?>
            <button type="submit">
                <i class="material-icons">dark_mode
                </i>
            </button>
        <?php else: ?>
            <button type="submit"><i class="material-icons">light_mode
                </i></button>
        <?php endif; ?>
    </form>
</div>