<?php

namespace App\Adapter;

use PDO;

interface DatabaseAwareInterface
{
    public function setPDO(PDO $pdo): static;
    public function getPDO(): PDO;
}