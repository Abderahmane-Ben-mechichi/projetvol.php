<?php
include_once "./Database.php";
include "./vol.php";
include "./controler.php";



$utilisateurC = new controler();
$error = "";


    if(
        isset($_POST['date_depart']) &&
        isset($_POST['heure_depart']) &&
        isset ($_POST['heure_arrivee']) &&
        isset($_POST['ref_pilote'])&&
        isset($_POST['ref_avion'])
    )
    {
        if(
            !empty($_POST['date_depart']) &&
            !empty($_POST['heure_depart']) &&
            !empty($_POST['heure_arrivee']) &&
            !empty($_POST['ref_pilote']) &&
            !empty($_POST['ref_avion'])
        ) {

        $utilisateurC->modifiervol($_POST['date_depart'],$_POST['heure_depart'],$_POST['heure_arrivee'],$_POST['ref_pilote'],$_POST['ref_avion']);
    }
    else
        $error = "Missing information";
}

?>
<html>

<div id="layoutSidenav_content">
    <main>
        <div style="  width: 80%;
  padding-right: 0.75rem;
  padding-left: 0.75rem;
  margin-right: auto;
  margin-left: auto;
  position: absolute;
  top:20%;
  left:17%;
  ">
            <h1 id="tab" class="mt-4" >Produit</h1>
            <ol class="breadcrumb mb-4">

                <li class="breadcrumb-item active">Produit</li>
                <li class="breadcrumb-item"><a href="index.html">Page d'accueil</a></li>
            </ol>
            <div class="card mb-4">

                <?php
                if (isset($_GET['ref_avion'])){
                    $user = $utilisateurC->recupererVol($_GET['ref_avion']);
                    ?>

                    <br>
                    <div class="d-flex justify-content-center">
                        <form action="" method="POST" class="w-50">
                            <br>
                            <input type="date"  name="idproduit" id="idproduit" class="form-control"  placeholder="<?php echo $user['date_depart']; ?>" autocomplete="off" value = >
                            <br>
                            <input type="time" name="libelle" id="libelle" class="form-control" placeholder="heure_depart" autocomplete="off" value = "<?php echo $user['heure_depart']; ?>">
                            <br>
                            <input type="time" name="prix" id="prix" class="form-control" placeholder="heure_arrivee" autocomplete="off" value = "<?php echo $user['heure_arrivee']; ?>">
                            <br>
                            <input type="text" name="quantite" id="qunatite" class="form-control" placeholder="ref_pilote" autocomplete="off" value = "<?php echo $user['ref_pilote']; ?>">
                            <br>
                            <input type="text" name="descriptionP" id="descriptionP" class="form-control" placeholder="ref_avion" autocomplete="off" value = "<?php echo $user['ref_avion']; ?>">

                            <div class="d-flex justyfy-content-center">
                                <input type="submit" class="btn btn-success" value="modifier" name="modifier">

                                <button class="btn btn-warning"><a href="affiche.php">Retour</a><i class="bi bi-arrow-counterclockwise"></i></button>

                            </div>
                        </form>
                    </div>

                    <?php
                }
                ?>
                </body>
</html>