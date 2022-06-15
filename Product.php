<?php
class Product {

    public $repart;
    public $code;
    public $price;
    public $availability;

    function __construct($_repart, $_code, $_price, $_availability) {
        $this->repart = $_repart;
        $this->code = $_code;
        $this->price = $_price;
        $this->availability = $_availability;
    }

    public function printInfo() {
        return "Reparto: $this->repart <br> Codice: $this->code Prezzo: € $this->price <br> Disponibilità: $this->availability";
    }
}
?>