<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Post Reception for Technical Test</title>
    </head>
    <body>
        <p>
            Code postal rentré :  <?php echo htmlspecialchars($_POST['code_postal']); ?>
        </p>
        <?php
        if (isset($_POST['code_postal']) && strlen($_POST['code_postal']) == 5) {
            $zip_code = $_POST['code_postal'][0]."".$_POST['code_postal'][1];

            if ($zip_code == "31") {
                echo "<p> Toulouse </p>";
            } elseif ($zip_code == "33") {
                echo "<p> Bordeaux </p>";
            } else {
                echo "<p> Code postal inconnu </p>";
            }
        }
        else {
            echo '<p> ERREUR </p>';
        }
        ?>
    </body>
</html>