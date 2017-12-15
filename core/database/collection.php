<?php

namespace database;
abstract class collection
{

static public function create()
    {
    $model = new static::$modelName;
    return $model;
    }

static public function findAll()
    {
    $tableName = get_called_class();
    $sql = 'SELECT * FROM ' . $tableName;
    return self::getResults($sql);
    }
