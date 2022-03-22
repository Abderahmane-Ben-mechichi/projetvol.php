<?php
include_once "./Database.php";
include "./User.php";
include "./controler.php"
?>


<html>
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>
<body>
<div id="container">
    <!-- zone de connexion -->

    <form action="./affiche.php" method="POST">
        <h1>Connexion</h1>

        <label><b>pseudo</b></label>
        <input type="text" id= "pseudo" placeholder="pseudo" name="pseudo" required>
        <br>-etr
        <br>

        <label><b>Mot de passe</b></label>
        <input type="password" id = "mdp" placeholder=" mot de passe" name="mdp" required>
        <br>
        <br>
        <a href="./inscription">inscription</a>
        <input type="submit" id='submit' value='LOGIN' >
        <?php
        $userC =new controler();

        if(
            isset($_POST['pseudo']) &&
            isset($_POST['mdp'])

        )
        {
            if(
                !empty($_POST['pseudo']) &&
                !empty($_POST['mdp'])
            )
            {
                // user is an object
                $user = new user(
                    $_POST['pseudo'],
                    $_POST['mdp']

                );

                // remplissage et ajout de les attribue  added in database
                $userC->recupereruser($_POST['pseudo'], $_POST['mdp']);
                if(!$userC){

                    header("Location: ./affiche.php");
                    exit();

                }
                else {

                }
            }
            else
                $error = "Missing information";

        }
        ?>
        <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</div>
</body>
</html>