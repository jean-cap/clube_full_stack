<?php

function all($table, $fields = '*')
{
    try {
        $connect = connect();

        $query = $connect->query("select {$fields} from {$table}");
        return $query->fetchAll();
    } catch (PDOException $e) {
        dump($e->getMessage());
    }
}

function findBy($table, $field, $value, $fields = '*')
{
    try {
        $connect = connect();

        $sql = "select {$fields} from {$table} where {$field} = :{$field}";

        $prepare = $connect->prepare($sql);
        $prepare->execute([$field => $value]);

        return $prepare->fetch();
    } catch (PDOException $e) {
        dump($e->getMessage());
    }
}
