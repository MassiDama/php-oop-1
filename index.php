<?php

    class Movie {

    //  variabili d'istanza
     public $title;
     public $genres;
     public $language;


        // costruttore
        public function __construct($title, $genres, $language) {

        $this -> title = $title;
        $this -> genres = $genres;
        $this -> language = $language;

        }

        // metodo
        public function getTitle () {
            return $this -> title;
        }

    }

    $movie1 = new Movie('Inglourious Basterds', 'War', 'English');
    $movie2 = new Movie('La vita è bella', 'Comedy', 'Italian');


    var_dump($movie1);

    echo "<br>";

    var_dump($movie2);

    
    
   




   

    