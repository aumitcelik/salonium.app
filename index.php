<?php
session_start();
include_once("language.php");
include_once("theme/theme.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Salonium</title>
    <link rel="stylesheet" type="text/css" href="theme/style.css">
</head>

<body <?php echo ($theme === 'dark') ? 'class="dark-mode"' : ''; ?>>
    <?php include_once("navbar.php"); ?>
    <div class="index">
        <div class="index-column" style="gap:0">
            <h2>
                <?php echo $lang["welcome"]; ?>
            </h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, dicta.</p>
            <img width="500px" height="400px"
                src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/89/1e/d1/caption.jpg?w=1200&h=-1&s=1"
                alt="" />
            <p><i class="material-icons">location_on</i> Lorem ipsum dolor sit. <br />
                <i class="material-icons">timer</i> 10:00/20:00 <br />
                <button type="submit" style="width: 200px;">
                    <?php echo $lang["makeAnAppointment"]; ?>
                </button>
            </p>

</body>


</html>