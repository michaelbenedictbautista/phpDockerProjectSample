<?php
namespace textreview;

<<<<<<< HEAD
use Exception;  
=======
use Exception;
>>>>>>> edf5e036a018e5fd72a0e902f9f80b3ee38ee623

class Database {
  private $username;
  private $password;
  private $database_name;
  private $database_host;
  private $connection;
<<<<<<< HEAD
  


  // function to set up the class
  protected function __construct() 
=======

  protected function __construct()
>>>>>>> edf5e036a018e5fd72a0e902f9f80b3ee38ee623
  {
    $this -> username = getenv("dbuser");
    $this -> password = getenv("dbpass");
    $this -> database_name = getenv("dbname");
    $this -> database_host = getenv("dbhost");
    $this -> connect();
<<<<<<< HEAD

=======
>>>>>>> edf5e036a018e5fd72a0e902f9f80b3ee38ee623
  }

  private function connect() 
  {
<<<<<<< HEAD
    try{
      $this  -> connection = mysqli_connect(
=======
    try
    {
      $this -> connection = mysqli_connect(
>>>>>>> edf5e036a018e5fd72a0e902f9f80b3ee38ee623
        $this -> database_host,
        $this -> username,
        $this -> password,
        $this -> database_name
      );
    }
<<<<<<< HEAD
    catch(Exception $exception) 
    {
      echo $exception -> getMessage(); // display the exception default from php exeception class message.
    }
  
  } 

  protected function getConnection() 
=======
    catch( Exception $exception) 
    {
      echo $exception -> getMessage();
    }
    
  }

  protected function getConnection()
>>>>>>> edf5e036a018e5fd72a0e902f9f80b3ee38ee623
  {
    return $this -> connection;
  }
}
<<<<<<< HEAD
?>
=======

?>
>>>>>>> edf5e036a018e5fd72a0e902f9f80b3ee38ee623
