<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Test page PHP</title>
    </head>
    <body>
        <p>
            Bonjour <?php echo htmlspecialchars($_POST['code_postal']); ?>
            <!-- htmlspecialchars permet de proteger le code en n'interpretant pas le code html
            '<' = '&lt;' et '>' = '&gt;' php ne veut les considérer comme des strg mais il les laisse comme ça <-->
        </p>
    <?php
    if (isset($_POST['vegetarien']))
    {
       echo '<p>Vous êtes donc végétarien.</p>';
    }
    else
    {
        echo '<p>Vous n\'êtes pas végétarien, vous mangez de la viande !</p>';
    }
    ?>
    </body>
</html>