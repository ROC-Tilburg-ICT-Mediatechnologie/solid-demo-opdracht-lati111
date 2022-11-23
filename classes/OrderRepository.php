<?php

interface OrderRepository
{
    public function load($orderID);
    public function getItems($orderID);
    public function calculateTotalSum($orderID);
    public function save($order);
    public function update($order);
    public function delete($order);
}
