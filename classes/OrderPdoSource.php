<?php
class OrderRepositoryPdo implements OrderRepository
{
        public function load($orderID)
        {
                $pdo = new PDO($this->config->getDsn(), $this->config->getDBUser(), $this->config->getDBPassword());
                $statement = $pdo->prepare("SELECT * FROM `orders` WHERE id=:id");
                $statement->bindParam(":id", $orderID);
                $statement->execute();
                return $statement->fetchObject("Order");
        }

        public function showOrder($orderID) {
                var_dump($this->load($orderID));
        }

        public function getItems($orderID) {
                $pdo = new PDO($this->config->getDsn(), $this->config->getDBUser(), $this->config->getDBPassword());
                $statement = $pdo->prepare("SELECT * FROM `item` WHERE orderID=:id");
                $statement->bindParam(":orderID", $orderID);
                $statement->execute();
                return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        public function calculateTotalSum($orderID) {
                $total = 0;
                foreach ($this->getItems($orderID) as $item) {
                        $total += $item["price"];
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
