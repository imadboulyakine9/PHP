<?php
class Banque implements IAdmin,IBanque{
    private $comptes = array();
    public function addCompte(Compte $compte){
        $this->comptes[] = $compte;
    }
    public function afficherComptes(){
        foreach($this->comptes as $compte){
            echo $compte->getCompteState()."<br>";
        }
    }
    public function supprimerCompte($code){
        foreach($this->comptes as $key => $compte){
            if($compte->getCode() == $code){
                unset($this->comptes[$key]);
            }
        }
    }
}
?>