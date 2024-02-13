<?php

function dbUpdate(string $table, array $data, array $where)
{
    if (!isAssociativeArray($data) || !isAssociativeArray($where)) {
        throw new Exception('O array deve ser associativo no update.');
    }

    try {
        $conn = connect();

        $preparedFields = array_map(function ($key) {
            return "$key = :$key";
        }, array_keys($data));

        $preparedFields = implode(', ', $preparedFields);

        $whereFields = array_keys($where);

        $sql = "update {$table} set {$preparedFields} where {$whereFields[0]} = :{$whereFields[0]}";

        $prepare = $conn->prepare($sql);
        $prepare->execute(array_merge($data, $where));

        return $prepare->rowCount();
    } catch (PDOException $e) {
        dump($e->getMessage());
    }
}