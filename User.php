<?php

class User{
    private $peudo;
    private $mdp;

    /**
     * @param $peudo
     * @param $mdp
     */
    public function __construct($peudo, $mdp)
    {
        $this->peudo = $peudo;
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getPeudo()
    {
        return $this->peudo;
    }

    /**
     * @param mixed $peudo
     */
    public function setPeudo($peudo)
    {
        $this->peudo = $peudo;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

}