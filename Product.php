<?php
class Product {

    public $repart;
    public $code;
    public $price;

    function __construct($_repart, $_code, $_price) {
        $this->repart = $_repart;
        $this->code = $_code;
        $this->price = $_price;
    }

    public function printInfo() {
        return "Reparto: $this->repart <br> Codice: $this->code Prezzo: € $this->price";
    }
}
?>