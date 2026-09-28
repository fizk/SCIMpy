<?php

namespace App\Adapter;

use PDO;

trait DatabaseAwareTrait
{
    private PDO $pdo;
    public function setPDO(PDO $pdo): static
    {
        $this->pdo = $pdo;
        return $this;
    }

    public function getPDO(): PDO
    {
        return $this->pdo;
    }
}