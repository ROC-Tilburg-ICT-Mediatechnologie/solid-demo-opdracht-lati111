<?php
class OrderRepositoryMysqli implements OrderRepository
{
    public function load($orderID)
    {
        $result = [];
        $mysqli = new mysqli($this->config->getDsn(), $this->config->getDBUser(), $this->config->getDBPassword());
        $statement = $mysqli->prepare("SELECT * FROM `orders` WHERE id=:id");
        $statement->execute(array(":id" => $orderID));
        $statement->bind_result($result);
        $statement->fetch();

        return $result;
    }

    public function showOrder($orderID)
    {
        var_dump($this->load($orderID));
    }

    public function getItems($orderID) {
        $results = [];
        $mysqli = new mysqli($this->config->getDsn(), $this->config->getDBUser(), $this->config->getDBPassword());
        $statement = $mysqli->prepare("SELECT * FROM `item` WHERE orderID=:id");
        $statement->execute(array(":id" => $orderID));
        $statement->bind_result($result);
        $statement->fetch();
        return $results;
    }

    public function calculateTotalSum($orderID) {
        $total = 0;
        foreach($this->getItems($orderID) as $result) {
            $total += $result["price"];
        }
        return $total;
    }

    public function save($order)
    {/*...*/
    }
    public function update($order)
    {/*...*/
    }
    public function delete($order)
    {/*...*/
    }
}
