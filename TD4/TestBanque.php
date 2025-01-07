<?php
    
class CompteCourant {
    private $numero;
    private $solde;

    public function __construct($numero, $solde) {
        $this->numero = $numero;
        $this->solde = $solde;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getSolde() {
        return $this->solde;
    }

    public function afficher() {
        echo "Compte numéro: " . $this->numero . ", Solde: " . $this->solde . "€<br>";
    }
}

// Création des comptes courants
$compte1 = new CompteCourant(1, 1000);
$compte2 = new CompteCourant(2, 2000);
$compte3 = new CompteCourant(3, 3000);

// Affichage des comptes courants
echo "Comptes avant suppression:<br>";
$compte1->afficher();
$compte2->afficher();
$compte3->afficher();

// Suppression d'un compte (par exemple, compte 2)
unset($compte2);

// Affichage des comptes courants après suppression
echo "Comptes après suppression:<br>";
$compte1->afficher();
if (isset($compte2)) {
    $compte2->afficher();
}
$compte3->afficher();
?>