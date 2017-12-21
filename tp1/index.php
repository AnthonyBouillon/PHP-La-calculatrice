<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <title>La calculatrice</title>
    </head>
    <body>
    <?php
        // Tout début du code PHP. Situé en haut de la page web
        ini_set("display_errors",0);error_reporting(0);
    ?>
        <h1>Une calculatrice en PHP</h1><hr/>
        <form action="index.php" method="post">
            <input type="text" name="chiffre1" placeholder="0" class="number"/>
            <input type="text" name="chiffre2" placeholder="0" class="number"/>
            <input type="submit" name="addition" value="+"/>
            <input type="submit" name="soustraction" value="-"/><br/>
            <input type="submit" name="multiplication" value="*" class="btn_calculMultiplication"/>
            <input type="submit" name="division" value="/"/><br/>
            <input type="submit" value="Effacer" name="reset" class="btn_reset"/>
        </form>
        <p>Résultat : <strong><?php
        if (!empty($_POST['chiffre1']) AND !empty($_POST['chiffre2']) && !empty($_POST['chiffre1']) AND !empty($_POST['chiffre2']) == $_POST['addition']) {
            echo $_POST['chiffre1'] + $_POST['chiffre2'];
        } elseif (!empty($_POST['chiffre1']) AND !empty($_POST['chiffre2']) && !empty($_POST['chiffre1']) AND !empty($_POST['chiffre2']) == $_POST['soustraction']) {
            echo $_POST['chiffre1'] - $_POST['chiffre2'];
        } elseif (!empty($_POST['chiffre1']) AND !empty($_POST['chiffre2']) && !empty($_POST['chiffre1']) AND !empty($_POST['chiffre2']) == $_POST['multiplication']) {
            echo $_POST['chiffre1'] * $_POST['chiffre2'];
        } elseif (!empty($_POST['chiffre1']) AND !empty($_POST['chiffre2']) && !empty($_POST['chiffre1']) AND !empty($_POST['chiffre2']) == $_POST['division']) {
            echo $_POST['chiffre1'] / $_POST['chiffre2'];
        };
        ?></strong></p>
        
        <p style="color:red"><?php if(is_numeric($_POST['chiffre1']) && is_numeric($_POST['chiffre2'])){echo ' ';}else{echo 'Seules les nombres sont pris en compte';}; ?></p>
    
    </body>
</html>
