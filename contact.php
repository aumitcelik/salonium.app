<?php include_once("language.php");
include_once("theme/theme.php"); ?>

<head>
    <link rel="stylesheet" type="text/css" href="theme/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body <?php echo ($theme === 'dark') ? 'class="dark-mode"' : ''; ?>>
    <?php include_once("navbar.php"); ?>
    <div class="contact">
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident sunt expedita eligendi eum. Fuga rem
                aperiam natus amet repudiandae ex. </p>
            <p><i class="material-icons">phone</i> 0(000)-000-0000 </p>
            <p><i class="material-icons">mail</i> lorem@ipsum.dolor </p>
            <p><i class="material-icons">location_on</i> Lorem ipsum dolor sit, amet consectetur adipisicing. </p>
        </div>
        <div class="contact-form">
            <h2>
                <?php echo $lang["contact"]; ?>
            </h2>
            <form method="post" action="" class="contact-form">
                <label for="name">
                    <?php echo $lang["addName"]; ?>
                    :
                </label>
                <input type="text" id="name" name="name">

                <label for="email">
                    <?php echo $lang["addMail"]; ?>
                    :
                </label>
                <input type="email" id="email" name="email">

                <label for="message">
                    <?php echo $lang["addMessage"]; ?>:
                </label>
                <textarea id="message" name="message" rows="4"></textarea>

                <input type="submit" value="Gönder">
            </form>
        </div>
    </div>

</body>