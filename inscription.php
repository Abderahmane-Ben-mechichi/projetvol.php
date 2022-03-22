<?php
include_once "./Database.php";
include "./user.php";
include "./controler.php"
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="styles.css" media="screen" type="text/css" />
</head>
<body>
<div id="container">
    <!-- zone de connexion -->
    </head>
    <body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Inscription</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="#" method="post">
                    <input class="text" type="text" name ="pseudo" id = "pseudo" placeholder="pseudo" required="">
                    <input class="text w3lpass" type="mdp" name="mdp" placeholder="Confirm Password" required="">
                    <div class="wthree-text">

                        <div class="clear"> </div>
                    </div>
                    <a href="./connexion">connexion</a>
                    <input type="submit" value="s'inscrire">

            </div>
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
                    $userC->ajouteruser($user);
                }
                else
                    $error = "Missing information";

            }
            ?>
            </ul>
        </div>
        <!-- //main -->
    </body>
</html>
