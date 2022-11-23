<?php

class OrderController
{
    public function __construct()
    {
    }

    public function printOrder($order)
    {
        echo "print order";
    }

    public function showOrder($order)
    {
        echo "toont order";
    }

    public function load($orderID)
    {
        echo "loaded";
    }

    public function save($order)
    {
        echo "saved";
    }

    public function update($order)
    {
        echo "updated";
    }

    public function delete($order)
    {
        echo "deleted";
    }
}
    

    //Todo: Implementeer de functionaliteiten hier op een "simpele" manier. Ze mogen een vaste waarde teruggeven.
    //bijvoorbeeld "return array('item1', 'item2', 'etc.');"
    //Voor het opslaan van data mag je een echo gebruiken. (e.g. "<itemnaam> wordt opgeslagen.")