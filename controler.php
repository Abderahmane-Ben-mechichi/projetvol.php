<?php
include_once "./Database.php";

class controler{
    function  ajouterVol($user )
    {
        $sql= "INSERT INTO vol(date_depart,heure_depart,heure_arrivee,ref_pilote,ref_avion) VALUES (:date_depart,:heure_depart,:heure_arrivee,:ref_pilote,:ref_avion)";
        $db= config::getConnexion();
        try
        {
            $query=$db->prepare($sql);
            $query->execute(
                [
                    'date_depart'=> $user->getDateDepart(),
                    'heure_depart' =>$user->getHeureDepart(),
                    'heure_arrivee' => $user->getHeureArrivee(),
                    'ref_pilote' =>$user->getRef_Pilote(),
                    'ref_avion' =>$user->getRef_Avion(),
                ]
            );
        }catch (Exception $e)  
        {
            die('Erreur:'.$e->getMessage());
        }
    }
    function recupererVol()
    {
        $sql="SELECT * FROM vol ";
        $db= config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }catch(Exception $vols){
            die('Erreur: '.$vols->getMessage());
        }
    }
    function  ajouteruser($user )
    {
        $sql= "INSERT INTO user(pseudo,mdp) VALUES (:pseudo,:mdp)";
        $db= config::getConnexion();
        try
        {
            $query=$db->prepare($sql);
            $query->execute(
                [
                    'pseudo'=> $user->getPeudo(),
                    'mdp' =>$user->getMdp(),

                ]
            );
        }catch (Exception $e)
        {
            die('Erreur:'.$e->getMessage());
        }
    }
    function recupereruser($pseudo,$mdp)
    {
        $sql="SELECT * FROM user where (pseudo = '$pseudo' AND mdp ='$mdp')";
        $db= config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }catch(Exception $user){
            die('Erreur: '.$user->getMessage());
        }
    }
    function Modifiervol($date_depart,$heure_depart,$heure_arrive,$ref_pilote,$ref_avion)
    {
        $sql = "UPDATE vol SET date_depart='$date_depart' ,heure_depart='$heure_depart',heure_arrive='$heure_arrive',ref_pilote='$ref_pilote'  WHERE ref_avion=?";

        $db= config::getConnexion();

        $query=$db->prepare($sql);
        $query->execute();
    }
    function RechercherVol($ref_avion)
    {

        $db = config::getConnexion();

        $sql = "SELECT * FROM vol where ref_avion='$ref_avion'";
        $query=$db->prepare($sql);
        $query->execute();
    }





}
