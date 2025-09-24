<?php

namespace Nawfel\MUD\npcs\purgatoire;
use Jugid\Staurie\Game\Npc;
use Jugid\Staurie\Game\GameOver;

class Grejon extends Npc {

    private GameOver $gameOver;


    public function __construct()
    {
        $this->gameOver = new GameOver();
    }

    public function name() : string {
        return 'Grejon';
    }

    public function description() : string {
        return 'Un homme familier au long nez crochu';
    }

    private bool $hasWon = false;

    private bool $hasSpoken = false;

    public function speak() : string|array {
        if (!$this->hasSpoken) {
            $this->hasSpoken = true;
            if ($this->playerHasItem("Piece")) {
                $intro = [];
                $intro[] = "Tiens tiens, on dirait que tu as une pièce de 5 euro, ça tombe bien il m'a été promise il y a 3000 ans" . PHP_EOL;
                $intro[] = "Merci pour cette pièce, je vais soigner ta maladie de la gréjonite aigue" . PHP_EOL;
                $intro[] = "fin du jeu" . PHP_EOL;
                return $intro;
            } else {
                echo "Tu ose venir ici sans ma pièce, ma précieuse pièce ???????" . PHP_EOL;
                echo "alors tu n'a rien a faire en vie" . PHP_EOL;
                echo "Grejon te supprime" . PHP_EOL;
                readline("Appuyez sur Entrée pour continuer...");
                $this->gameOver->GameOver();
            }

        };
        return "";
    }
}
