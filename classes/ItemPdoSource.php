<?php
class ItemRepositoryPdo implements ItemRepository
{
    public function load($itemID)
    {
        $pdo = new PDO($this->config->getDsn(), $this->config->getDBUser(), $this->config->getDBPassword());
        $statement = $pdo->prepare("SELECT * FROM `item` WHERE id=:id");
        $statement->bindParam(":id", $orderID);
        $statement->execute();
        return $statement->fetchObject("Item");
    }
}
