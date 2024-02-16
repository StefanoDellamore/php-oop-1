<?php
    class Movie {
        public $title;
        public $director;

        function __construct($title, $director)
        {
            $this -> title = $title;
            $this -> director = $title;
        }

        function printInfo () {
            echo "Title: {$this -> title} - Director: {$this -> director}";
        }
    }
   $movie1 = new Movie("American Psycho", "Mary Harron");
   $movie2 = new Movie("The Wolf of Wall Street", "Martin Scorsese");

   $movie1 -> printInfo();
   $movie2 -> printInfo();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-oop-1</title>
    </head>
    <body>
        
    </body>
</html>