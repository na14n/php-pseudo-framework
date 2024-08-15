<?php

// ============================================
//             This is the Database Class
// ============================================
//  You can use this class to initialize the
//  mysql database to be used.
//  
//  You can also add more functions here to serve
//  as an API to interact with the Database.
//  
//  query() function prepares a  query to the
//  database with the corresponding parameters for
//  the query string.
//  
//  get() will return all the result from the query
//  action
//
//  find() will retrieve a single result from the
//  query result
//  
//  findOrFail() will retrieve a single result and
//  return it if found or throw an error if otherwise
//

namespace Core;

use PDO;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
}
