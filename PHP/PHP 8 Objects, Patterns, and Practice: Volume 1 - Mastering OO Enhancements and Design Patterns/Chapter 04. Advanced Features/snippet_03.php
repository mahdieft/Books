<?php

class ShopProduct
{
    private int $id = 0;

// ...
    public function setID(int $id): void
    {
        $this->id = $id;
    }

// ...
    public static function getInstance(int $id, \PDO $pdo): ShopProduct|null
    {
        $stmt = $pdo->prepare("select * from products where id=?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        if (empty($row)) {
            return null;
        }
        if ($row['type'] == "book") {
            $product = new BookProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (float)$row['price'],
                (int)$row['numpages']
            );
        } elseif ($row['type'] == "record") {
            $product = new RecordProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (float)$row['price'],
                (int)$row['playlength']
            );
        } else {
            $firstname = (is_null($row['firstname'])) ? "" : $row['firstname'];
            $product = new ShopProduct(
                $row['title'],
                $firstname,
                $row['mainname'],
                (float)$row['price']
            );
        }
        $product->setId((int)$row['id']);
        $product->setDiscount((int)$row['discount']);
        return $product;
    }
}
