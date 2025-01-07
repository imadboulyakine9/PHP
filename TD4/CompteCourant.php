<?php
class CompteCourant extends Compte {
    private float $decouvert;
    public function __construct($c,$s,$dec)
    {
        
    }
    public function retirer($mt){
        //$this->solde -= $mt;
    }
    public function getCompteState() : void {
        
    }
}