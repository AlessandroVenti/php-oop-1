<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// GOAL: come detto a lezione, generare nuovo controller con rotta associata; 
// definire poi classe Movie con titolo e descrizione; 
// definire costruttore con titolo necessario e descrizione opzionale;
// e metodo getString() che restituisca una stringa riportante tutte le variabili;
// generare poi un paio di istanze e stamparle per mezzo del dd() come visto in classe

class Movie {

    public $movie;
    public $description;

    public function __construct($movie, $description = null) {

        $this -> movie = $movie;

        if ($description == null) {
            $this -> description = 'Non presente';
        } else {
            $this -> description = $description; 
        }
        
    }

    public function getString() {
        return "Movie Title: " . $this -> movie . " || Description path: " . $this -> description;
    }

}

class OOPController extends Controller {

    public function oopFunction() {

        $movie1 = new Movie("Ready Player One","Nel 2045 la terra è diventata un luogo inquinato, funestato da guerre, povertà e crisi energetica. Gli abitanti versano in condizioni precarie, stipati in grossi container spogli, senz'altra evasione che il nostalgico mondo virtuale di OASIS. L'universo ispirato ai ruggenti anni ottanta, creato dal milionario James Donovan Halliday (Mark Rylance), conta milioni di login al giorno per la facilità d'accesso (sono sufficienti un visore e un paio di guanti aptici) e gli scenari iperrealistici in cui sfuggire al mondo tetro e pericoloso. La notizia della morte di Halliday arriva insieme con l'ultima, stimolante sfida lanciata dall'eccentrico creatore: una caccia al tesoro da miliardi di dollari. ");
        $movie2 = new Movie("Il viaggio di Amelie", "L'avventura di Amelie, ragazza di città, che si trova ad affrontare le montagne dopo essere scappata da una clinica. Insieme a lei ci sarà il coetaneo Bart, un ragazzo che vive in montagna e che la aiuterà nella fuga.");
        $movie3 = new Movie("Titanic");
        
        $moviesCollection = [$movie1, $movie2, $movie3];
        $movieString = '';
        foreach ($moviesCollection as $singleMovie) {
            $movieString .= $singleMovie -> getString() . ' \n ';
        }

        dd($movie1, $movie2, $movie3);
        // dd($movieString);
        return view('pages.oopExercise');
    }
}
