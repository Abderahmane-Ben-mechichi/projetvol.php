<?php

class vol{


    private $date_depart=null;
    private $heure_depart=null;
    private $heure_arrivee=null;
    private $ref_pilote=null;
    private $ref_avion=null;


    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
            {
        // On appelle le setter.
                $this->$method($value);
            }
        }
    }

    public function __construct($date_depart,$heure_depart,$heure_arrivee,$ref_pilote,$ref_avion)
    {
        $this->date_depart= $date_depart;
        $this->heure_depart=$heure_depart;
        $this->heure_arrivee=$heure_arrivee ;
        $this->ref_pilote= $ref_pilote;
        $this->ref_avion= $ref_avion;
    }

    /**
     * @return mixed
     */
    public function getDateDepart()
    {
        return $this->date_depart;
    }

    /**
     * @param mixed $date_depart
     */
    public function setDateDepart($date_depart)
    {
        $this->date_depart = $date_depart;
    }

    /**
     * @return mixed
     */
    public function getHeureDepart()
    {
        return $this->heure_depart;
    }

    /**
     * @param mixed $heure_depart
     */
    public function setHeureDepart($heure_depart)
    {
        $this->heure_depart = $heure_depart;
    }

    /**
     * @return mixed
     */
    public function getHeureArrivee()
    {
        return $this->heure_arrivee;
    }

    /**
     * @param mixed $heure_arrive
     */
    public function setHeureArrivee($heure_arrivee)
    {
        $this->heure_arrivee = $heure_arrivee;
    }

    /**
     * @return mixed
     */
   
    public function getRef_Pilote()
    {
        return $this->ref_pilote;
    }


    /**
     * @param mixed ref_pilote
     */
    public function setref_pilote($ref_pilote)
    {
        $this->ref_pilote = $ref_pilote;
    }

    /**
     * @return mixed
     */
    public function getRef_Avion()
    {
        return $this->ref_avion;
    }

    /**
     * @param mixed ref_avion
     */
    public function setref_avion($ref_avion)
    {
        $this->ref_avion = $ref_avion;
    }

}