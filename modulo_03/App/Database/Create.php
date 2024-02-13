<?php

function dbCreate(string $table, array $data)
{
    try {
        if (!isAssociativeArray($data)) {
            throw new Exception('O array tem que ser associativo.');
        }

        $conn = connect();
        $fields = implode(', ', array_keys($data));
        $preparedFields = implode(', :', array_keys($data));

        $sql = "insert into {$table} ({$fields}) values (:{$preparedFields})";

        $prepare = $conn->prepare($sql);
        return $prepare->execute($data);
    } catch (PDOException $e) {
        dump($e->getMessage());
    }
}