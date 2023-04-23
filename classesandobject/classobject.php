<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <?php
    class Book {
        var $title;
        var $author;
        var $pages;
    }

    $book1 = new Book();
    $book1 -> title = "handy pan <br>";
    $book1 -> author = "john <br>";
    $book1 -> pages = "500 <br>";

    echo $book1 -> title;
    echo $book1 -> author;
    echo $book1 -> pages;

    $book2= new Book();
    $book2-> title = "Real tann <br>";
    $book2-> author = "paul <br>";
    $book2-> pages = "900 <br>";

    echo $book2-> title;
    echo $book2-> author;
    echo $book2-> pages;
    ?>

    <?php
    class Bookk {
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages){
            $this -> title = $aTitle;
            $this -> author = $aAuthor;
            $this -> pages = $aPages;
        }
    }

    $bookk1 = new Bookk("Mountain dews <br>", "James <br>", "1000 <br>");
    echo $bookk1 -> title;
    echo $bookk1 -> author;
    echo $bookk1 -> pages;
    ?>
</body>
</html>