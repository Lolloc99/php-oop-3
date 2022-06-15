<?php

class User {

    public $name;
    public $email;
    public $credit_card;
    public $registered;
    public $cart = [];

    function __construct($_name, $_email, $_credit_card, $_registered) {
        $this->name = $_name;
        $this->email = $_email;
        $this->credit_card = $_credit_card;
        $this->registered = $_registered;
    }

    function addProductToCart($_product) {
        if ($_product->availability === "disponibile") {
            $this->cart[] = $_product;
        } else {
            throw new Exception("Prodotto non disponibile!");
        }
    }

    function checkCreditCard($_cdc) {
        if ($_cdc === "true") {
            return "confermata!";
        } else {
            return "assente.";
        }
    }

    function getTotalPrice($registered) {
        $total_price = 0;
        foreach($this->cart as $item) {
            $total_price += $item->price;
        }
        if ($registered === "true") {
            return $total_price - (($total_price * 20) / 100);
        } else {
            return $total_price;
        }
    }
}
?>