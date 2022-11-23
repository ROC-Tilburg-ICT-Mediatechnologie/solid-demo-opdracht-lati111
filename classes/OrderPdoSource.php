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

        public function calculateTotalSum($orderID) {
                $pdo = new PDO($this->config->getDsn(), $this->config->getDBUser(), $this->config->getDBPassword());
                $statement = $pdo->prepare("SELECT * FROM `item` WHERE orderID=:id");
                $statement->bindParam(":orderID", $orderID);
                $statement->execute();
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);

                $total = 0;
                foreach ($results as $result) {
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
