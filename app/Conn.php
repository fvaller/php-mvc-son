<?php

namespace App;

class Conn
{
    public static function getDb()
    {
        return new \PDO('mysql:host=localhost;dbname=sicloc01;', 'root', 'root2017');
    }
}
