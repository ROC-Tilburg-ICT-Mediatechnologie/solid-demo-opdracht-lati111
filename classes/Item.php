<?php

class Item {
    private $id;
    private $name;
    private $price;

    function __construct(int $id, string $name, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    //Todo: Implementeer de functionaliteiten hier op een "simpele" manier. Ze mogen een vaste waarde teruggeven.
    //bijvoorbeeld "return array('item1', 'item2', 'etc.');"
    //Voor het opslaan van data mag je een echo gebruiken. (e.g. "<itemnaam> wordt opgeslagen.")
}