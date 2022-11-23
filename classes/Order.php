<?php

class Order {
    private $id;
    private $customerName;
    private $items = [];

    function __construct(int $id, string $customerName, $items=null) {
        $this->id = $id;
        $this->customerName = $customerName;
        $this->items = $items;
    }

    //Todo: Implementeer de functionaliteiten hier op een "simpele" manier. Ze mogen een vaste waarde teruggeven.
    //bijvoorbeeld "return array('item1', 'item2', 'etc.');"
    //Voor het opslaan van data mag je een echo gebruiken. (e.g. "<itemnaam> wordt opgeslagen.")
}