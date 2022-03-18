<?php
namespace textreview;

use Exception;  

class Database {
  private $username;
  private $password;
  private $database_name;
  private $database_host;
  private $connection;
  
  // function to set up the class
  protected function __construct()
  {
    $this -> username = getenv("dbuser");
    $this -> password = getenv("dbpass");
    $this -> database_name = getenv("dbname");
    $this -> database_host = getenv("dbhost");
    $this -> connect();
  }

  private function connect() 
  {
    try
    {
      $this -> connection = mysqli_connect(
        $this -> database_host,
        $this -> username,
        $this -> password,
        $this -> database_name
      );
    }
    catch(Exception $exception) 
    {
      echo $exception -> getMessage(); // display the exception default from php exeception class message.
    }
  } 

  protected function getConnection()
  {
    return $this -> connection;
  }
}

?>


