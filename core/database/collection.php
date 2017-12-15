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

protected static function getResults($sql) {
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute();
        $class = static::$modelName;
        $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
        $recordsSet = $statement->fetchAll();
        return $recordsSet;
    }
 
static public function findOne($id)
    {
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE id =' . $id;
        $recordsSet = self::getResults($sql);
        return $recordsSet[0];
    }
}
?>
