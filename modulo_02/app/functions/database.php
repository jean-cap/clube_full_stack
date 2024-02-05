<?php

function connect()
{
    $pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}

function create($table, $fields)
{
    $pdo = connect();

    if (!is_array($fields)) {
        $fields = (array)$fields;
    }

    $columns = implode(',', array_keys($fields));
    $preparedColumns = implode(',:', array_keys($fields));

    $sql = "insert into {$table} ({$columns}) values (:{$preparedColumns})";

    $insert = $pdo->prepare($sql);

    return $insert->execute($fields);
}

function update($table, $fields, $where)
{
    if (!is_array($fields)) {
        $fields = (array)$fields;
    }

    $pdo = connect();

    $preparedColumns = array_map(function ($field) {
        return "{$field} = :{$field}";
    }, array_keys($fields));

    $preparedColumns = implode(', ', $preparedColumns);

    $sql = "update {$table} set {$preparedColumns} where {$where[0]} = :{$where[0]}";

    $data = array_merge($fields, [$where[0] => $where[1]]);

    $update = $pdo->prepare($sql);
    $update->execute($data);

    return $update->rowCount();
}

function find($table, $field, $value)
{
    $pdo = connect();

    $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);

    $sql = "select * from {$table} where {$field} = :{$field}";

    $find = $pdo->prepare($sql);
    $find->bindValue($field, $value);
    $find->execute();

    return $find->fetch();
}

function all($table)
{
    $pdo = connect();

    $sql = "select * from {$table}";

    $list = $pdo->query($sql);
    $list->execute();

    return $list->fetchAll();
}

function delete($table, $field, $value)
{
    $pdo = connect();

    $sql = "delete from {$table} where {$field} = :{$field}";

    $delete = $pdo->prepare($sql);
    $delete->bindParam($field, $value);

    return $delete->execute();
}
