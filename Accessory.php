<?php
require_once __DIR__ . "/Product.php";

class Accessory extends Product {
    public $animal_typology;
    public $material;

    function __construct($_repart, $_code, $_animal_typology, $_material, $_price, $_availability) {
        parent::__construct($_repart, $_code, $_price, $_availability);
        $this->animal_typology = $_animal_typology;
        $this->material = $_material;
    }

    public function printInfo() {
        return "Reparto: $this->repart <br> Codice: $this->code <br> Prodotto per: $this->animal_typology <br> Materiale: $this->material <br> Prezzo: € $this->price <br> Disponibilità: $this->availability";
    }
}
?>