<?php

    class Movie {

    //  variabili d'istanza
     public $title;
     public $genres = [];
     public $language;


        // costruttore
        public function __construct($title, $genres, $language) {

        $this -> title = $title;
        $this -> genres = $genres;
        $this -> language = $language;

        }

        // metodo
        public function upperTitle() {
            $upperTitle_var = strtoupper($this -> title);
            echo "Title: {$upperTitle_var}, ";

        }

        // metodo
        public function getInfo () {
            
            $allGenres = implode("/", $this -> genres);
            echo "Genre: {$allGenres}, Language: {$this -> language}";
            
        }

    }

    $movie1 = new Movie('Inglourious Basterds',['War', 'Action'], 'English');
    $movie2 = new Movie('La vita è bella', ['Comedy', 'Drama', 'War'], 'Italian');


    //var_dump($movie1);
  

    //echo "<br>";

    // var_dump($movie2);

    $movie1 -> upperTitle();
    $movie1 -> getInfo();

    echo "<br>";
    echo "<br>";

    $movie2 -> upperTitle();
    $movie2 -> getInfo();
   




   

    