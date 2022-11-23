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

    public function addItem($item) {
        $this->items[] = $item;
    }

    public function removeItem($item){
        array_splice($this->items, array_search($item, $this->items));
    }

    public function getItems(){
        return $this->items;
    }

    public function getItemCount(){
        return count($this->items);
    }

    public function calculateTotalSum(){
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }


    //Todo: Implementeer de functionaliteiten hier op een "simpele" manier. Ze mogen een vaste waarde teruggeven.
    //bijvoorbeeld "return array('item1', 'item2', 'etc.');"
    //Voor het opslaan van data mag je een echo gebruiken. (e.g. "<itemnaam> wordt opgeslagen.")
}