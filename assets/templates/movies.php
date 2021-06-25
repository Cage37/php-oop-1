<?php
class Movie {
    public $title;
    public $duration;
    public $year;
    public $genre;


    // public function setTitle(string $title) {
    //     return $this->title = $title;
    // }

    public function __construct(string $title, float $duration, float $year, string $genre = "Science Fiction") {
            $this->title = $title;
            $this->duration = $duration;
            $this->year = $year;
            $this->genre = $genre;
    }
};

// $avengers = new Movie(180, 2019);
// $avengers->setTitle("Avengers: Endgame");
// $spiderman = new Movie(130, 2017);
// $spiderman->setTitle("Spider-Man: Homecoming");
// $batman = new Movie(140, 2005);
// $batman->setTitle("Batman Begins");
// $ironman = new Movie(120, 2008);
// $ironman->setTitle("Iron Man");

$movies = [
    new Movie("Avengers: Endgame", 180, 2019, "Science Fiction"),
    new Movie("Spider-Man: Homecoming", 130, 2017, "Science Fiction"),
    new Movie("Batman Begins", 140, 2005, "Science Fiction"),
    new Movie("Iron Man", 120, 2008, "Science Fiction"),
];

?>