<?php

function dbCreate($table, array $data)
{
    try {
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