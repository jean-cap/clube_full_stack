<?php

function dbDelete(string $table, array $where)
{
    if (!isAssociativeArray($where)) {
        throw new Exception('O array deve ser associativo no delete.');
    }

    try {
        $conn = connect();

        $whereFields = array_keys($where);

        $sql = "delete from {$table} where {$whereFields[0]} = :{$whereFields[0]}";

        $prepare = $conn->prepare($sql);
        $prepare->execute($where);

        return $prepare->rowCount();
    } catch (PDOException $e) {
        dump($e->getMessage());
    }
}