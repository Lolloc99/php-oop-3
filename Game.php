<?php
require_once __DIR__ . "/Product.php";

class Game extends Product {
    public $size;
    public $material;

    function __construct($_repart, $_code, $_size, $_material, $_price) {
        parent::__construct($_repart, $_code, $_price);
        $this->size = $_size;
        $this->material = $_material;
    }

    public function printInfo() {
        return "Reparto: $this->repart <br> Codice: $this->code <br> Taglia: $this->size <br> Materiale: $this->material <br> Prezzo: € $this->price";
    }
}
?>