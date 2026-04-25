<?php

namespace App\Models;

class ParcoursRepository extends EntityRepository
{
    public function findAll(): array
    {
        $sql = "SELECT * FROM parcours ORDER BY date_entree DESC";

        $stmt = $this->getDb()->query($sql);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>