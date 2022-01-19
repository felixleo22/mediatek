<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class DB {

  private $driver = "mysql";
  private $host = "localhost";
  private $database = "database";
  private $username = "root";
  private $password = "password";
  private $charset = "utf8";
  private $collation = "utf8_unicode_ci";
  private $prefix = '';

  public function connect() {
    $capsule = new Capsule;
    $capsule->addConnection([
     'driver' => $this->driver,
     'host' => $this->host,
     'database' => $this->database,
     'username' => $this->username,
     'password' => $this->password,
     'charset' => $this->charset,
     'collation' => $this->collation,
     'prefix' => $this->prefix,
    ]);
    return $capsule;
  }
}