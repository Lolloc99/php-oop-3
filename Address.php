<?php

trait Address {
    public $city;
    public $municipality;

    public function printIndirizzo() {
        return "$this->city $this->municipality";
    }
}
?>