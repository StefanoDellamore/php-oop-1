<?php
    class Movie {
        public $title;
        public $director;
        public $genres;

        function __construct($title, $director, $genres)
        {
            $this -> title = $title;
            $this -> director = $director;
            $this -> genres = $genres;

            $this->genres = is_array($genres) ? $genres : [$genres];
        }

        function printInfo () {
            echo "Film: {$this->title} - Regista: {$this->director} - Generi: " . implode(", ", $this->genres) . "<br>";
        }
    }
   $movie1 = new Movie("American Psycho", "Mary Harron", ["thriller"]);
   $movie2 = new Movie("The Wolf of Wall Street", "Martin Scorsese", ["Crime", "Drammatico", "Commedia"]);

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