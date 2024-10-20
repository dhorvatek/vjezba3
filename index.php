<?php
// PHP blok počinje na početku dokumenta prije deklaracije!
$title = "Da Vincijev kod";
$link = "https://hr.wikipedia.org/wiki/";

$restOfTheLink = "Da_Vincijev_kod";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Da Vincijev kod">
    <meta name="keywords" content="Da Vinci, kod, triler, knjiga, Dan Brown">
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $title . " je kriminalistički triler američkog pisca Dana Browna."; ?></p>
    <p>
        <a href="<?php echo $link. $restOfTheLink; ?>" target="_blank">
            Poveznica.. 
        </a>
    </p>
    
    <?php
    // vjezba3
    ?>
    
</body>
</html>