<?php

namespace App\Entity\Repository;

use App\Entity\EntityInterface;

class Product extends AbstractRepository implements RepositoryInterface
{
    private $connexion;

    public function __construct()
    {
        $this->connexion = $this->getConnexion();
    }

    /**
     * @return EntityInterface[]
     */
    public function findAll() : array
    {
        $sql = "SELECT * FROM product";
        $result = $this->connexion->query($sql);

        if ($result->rowCount() == 0) {
            echo "0 results";
        } else return $result;
    }

    /**
     * @param int $id
     * @return \App\Entity\Product
     */
    public function find(int $id) : EntityInterface
    {
        $sql = "SELECT * FROM product WHERE id=$id LIMIT 1";
        $result = $this->connexion->query($sql);

        if ($result->rowCount() == 0) {
            echo "0 results";
        } else return $result;
    }

    /**
     * @param int $id
     * @return EntityInterface[]
     */
    public function findBy($column, $value) : array
    {
        $sql = "SELECT * FROM product WHERE $column=$value LIMIT 1";
        $result = $this->connexion->query($sql);

        if ($result->rowCount() == 0) {
            echo "0 results";
        } else return $result;
    }
}