<?php

class Base
{

protected $dbhost = DB_HOST;
protected $dbname = DB_NAME;
protected $dbuser = DB_USER;
protected $dbpass = DB_PASSWORD;

private $cnx;
private $stmt;
private $error;

public function __construct() 
{
$dbh = "mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname;

$options = [
PDO::ATTR_ERRMODE => true,
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {

   $this->cnx = new PDO($dbh, $this->dbuser, $this->dbpass, $options); 
  $this->cnx->exec("set names utf8"); 
} catch (PDOException $e) 
{ $this->error = $e->getMessage(); 
  echo $this->error; 
} 
}
