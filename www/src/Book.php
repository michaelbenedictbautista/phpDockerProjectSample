<?php
namespace textreview;

use textreview\Database;
use Exception;

class Book extends Database {
<<<<<<< HEAD

    private $dbconnection;

    // access dataabase
    public function __construct() 
    {
        // call the contruct method from the parent class which is the Database class.
        parent::__construct();

        // store in dbconnection variable 
        $this -> dbconnection =  parent::getConnection();
    } 

    // execute a query
    public function getItems()
    {
        $query = "SELECT 
        book_id, 
        book_title,
        tagline,
        isbn13,
        isbn10,
        year,
        pages,
        created
        FROM book";

        try 
        {
          $statement =  $this -> dbconnection -> prepare ( $query );
           if ( !$statement ) 
           {
                throw new Exception ("Problem with query...");
           }  
           if ( !$statement -> execute()) 
           {
               throw new Exception("Query failed to execute...");
           }
           else
           {
                $books = array();
                $items = array();
                $result = $statement -> get_result();
                while( $row = $result -> fetch_assoc() ) 
                {
                    array_push( $items, $row ); // get the array result
                }
                $books["Total"] = count($items); // array or collection of all items
                $books["items"] = $items; // actual book data  

                return $books;
           }
           return null;
        }

        catch (Exection $exception) 
        {
             echo $exception = getMessage();   
        }
    }
}
?>
=======
  private $dbconnection;
  public function __construct()
  {
    // call the __construct() method of the Database class to initialise
    parent::__construct();
    // get the connection after it's been created and keep a reference in 
    // a local variable called $db_connection
    $this -> dbconnection = parent::getConnection();
  }

  public function getItems() 
  {
    $query = "
    SELECT 
      book.book_id,
      book_title,
      tagline,
      isbn13,
      year,
      pages,
      book_image.image_id,
      image.file_name AS picture
      FROM book 
      INNER JOIN book_image
      ON book.book_id = book_image.book_id
      INNER JOIN image
      ON book_image.image_id = image.image_id
      WHERE 1
    ";

    try
    {
      $statement = $this -> dbconnection -> prepare( $query );
      if( !$statement ) 
      {
        throw new Exception("problem with query " . $query );
      }

      if( !$statement -> execute() ) 
      {
        throw new Exception("query failed to execute");
      }
      else 
      {
        $books = array();
        $items = array();
        $result = $statement -> get_result();
        while( $row = $result -> fetch_assoc() ) 
        {
          array_push( $items, $row );
        }
        $books["total"] = count($items);
        $books["items"] = $items;

        return $books;
      }
      return null;
    }
    catch ( Exception $exception ) 
    {
      echo $exception -> getMessage();
    }
  }

  public function getDetail() {
    
  }
}
>>>>>>> edf5e036a018e5fd72a0e902f9f80b3ee38ee623
