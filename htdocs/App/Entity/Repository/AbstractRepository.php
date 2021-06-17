<?php

namespace App\Entity\Repository;
abstract class AbstractRepository implements RepositoryInterface
{
    function getConnexion() : PDOInstance
    {
        $db = connexion::getInstance();
        return $db->getDbh();
    }
}