<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Asiakkaat</h3>
        <?php
        foreach ($asiakkaat as $asiakas){
            print "<p>$asiakas->sukunimi</p>";
        }
        ?>
    </body>
</html>
