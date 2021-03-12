<!--
● Creazione di una classe ‘Movie’
● Dichiarazione delle proprietà della classe
● Dichiarazione del costruttore
● Dichiarazione di almeno un metodo.
● Fare poi degli esempi di utilizzo della classe
  istanziando almeno due oggetti e stampando a
  schermo il valore delle proprietà.
-->

<?php

// Creazione di una classe
class Movie{

    // Dichiarazione delle proprietà della classe
    public $titolo;
    public $genere;
    public $anno;
    public $regista;
    public $voto = 0;
    public $classifica;

    // Dichiarazione del costruttore
    public function __construct($_titolo) {
        $this->titolo = $_titolo;
    }

    // Dichiarazione di almeno un metodo.
    public function setClassifica() {

        if ($this->voto > 3){
            $this->classifica = 'Visione Consigliata';
        } else {
            $this->classifica = 'Visione Consigliata, ma c\'è di meglio';
        }

    }

}

// Istanziando oggetti
$movie1 = new Movie('Harry Potter e la pietra filosofale');
$movie1->genere = 'Fantastico';
$movie1->anno =  2001;
$movie1->regista =  'Chris Columbus';
$movie1->voto =  4;
$movie1->setClassifica();
var_dump($movie1);

$movie2 = new Movie('Harry Potter e la camera dei segreti');
$movie2->genere = 'Fantastico';
$movie2->anno =  2002;
$movie2->regista =  'Chris Columbus';
$movie2->voto =  4;
$movie2->setClassifica();
var_dump($movie2);

$movie3 = new Movie('Harry Potter e il prigioniero di Azkaban');
$movie3->genere = 'Fantastico';
$movie3->anno =  2004;
$movie3->regista =  'Alfonso Cuarón';
$movie3->voto =  3;
$movie3->setClassifica();
var_dump($movie3);

$movie4 = new Movie('Harry Potter e il calice di fuoco');
$movie4->genere = 'Fantastico';
$movie4->anno =  2005;
$movie4->regista =  'Mike Newell';
$movie4->voto =  4;
$movie4->setClassifica();
var_dump($movie4);

$movie5 = new Movie('Harry Potter e l\'ordine della fenice');
$movie5->genere = 'Fantastico';
$movie5->anno =  2007;
$movie5->regista =  'David Yates';
$movie5->voto =  3;
$movie5->setClassifica();
var_dump($movie5);

$movie6 = new Movie('Harry Potter e il principe mezzosangue');
$movie6->genere = 'Fantastico';
$movie6->anno =  2009;
$movie6->regista =  'David Yates';
$movie6->voto =  2;
$movie6->setClassifica();

var_dump($movie6);

$movie7 = new Movie('Harry Potter e i doni della morte');
$movie7->genere = 'Fantastico';
$movie7->anno =  2010;
$movie7->regista =  'David Yates';
$movie7->voto =  4;
$movie7->setClassifica();
var_dump($movie7);

// Stampa giusto per esempio - il br è solo per velocità
foreach ($movie1 as $key => $value) {
    echo strtoupper($key) .' - ' .$value .'<br>';
}
echo '<br>';
foreach ($movie2 as $key => $value) {
    echo strtoupper($key) .' - ' .$value .'<br>';
}
echo '<br>';
foreach ($movie6 as $key => $value) {
    echo strtoupper($key) .' - ' .$value .'<br>';
}
