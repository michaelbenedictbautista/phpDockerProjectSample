<?php
<<<<<<< HEAD
   //enable comp[oser autoloading
//    require("vendor/autoload.php");
   
//    // request classes from autoloader
//    use textreview\Book;

//    $book = new Book();
//    $items = $book -> getItems();

//    if ( $items ) 
//    {
//        print_r($items);
//    }
//    else 
//    {
//        echo "No books found!";
//    }

// Week 6 loading the result of rows to using twig library
// enable composer autoloading
require("vendor/autoload.php");

//request namespace(textreview) and classes(Book) from autoloader
=======
// enable composer autoloading
require("vendor/autoload.php");

//request classes from autoloader
>>>>>>> edf5e036a018e5fd72a0e902f9f80b3ee38ee623
use textreview\Book;

$book = new Book();
$items = $book -> getItems();

$loader = new \Twig\Loader\FilesystemLoader("templates");
$twig = new Twig\Environment( $loader, [ "cache" => false ] );
<<<<<<< HEAD
echo $twig -> render("home.html.twig", ["page_title" => "TextReview", "greeting" => "Hello to my website",
"books" => $items ] );


?>

=======

echo $twig -> render("home.html.twig", ["page_title" => "TextReview", "greeting" => "Hello there", "books" => $items ] );
?>
>>>>>>> edf5e036a018e5fd72a0e902f9f80b3ee38ee623
