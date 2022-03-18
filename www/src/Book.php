<?php
namespace textreview;

use textreview\Database;
use Exception;

class Book extends Database {

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
      ";

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
                $books["total"] = count($items); // array or collection of all items
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
    
    public function getDetail() { 
      
    }
}
 
?>
