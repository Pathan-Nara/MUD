<?php

namespace Nawfel\MUD\npcs\chatelet;
use Jugid\Staurie\Game\Npc;
use Jugid\Staurie\Game\GameOver;
use Nawfel\MUD\items\Chaussure;
use Nawfel\MUD\items\Piece;
use Jugid\Staurie\Component\Inventory\Inventory;

class Distributeur extends Npc {
    private Inventory $inventory;

    private GameOver $gameOver;

    public function name() : string {
        return 'Distributeur';
    }

    public function description() : string {
        return 'Un distribiteur louche';
    }
    private $hasSpoken = false;
    private $NbSpoken = 0;

    public function __construct() {
        $this->gameOver = new GameOver();
        $this->inventory = new Inventory();
    }

    public function speak() : string|array {

        if ($this->playerHasItem('Chaussure')) {
            $this->giveItem(new Piece());
            return "Merci mon gars t'es un vrai de vrai, tiens prends la pièce de 5 euros comme promis" . PHP_EOL;
        }

        $intro = "*Vous vous approchez du distributeur*
        Salamalekoum khouya j'ai perdu mes chaussures va à Neuille pour les récupérer je recompenserai gracement
        " . PHP_EOL;
        if ($this->NbSpoken >= 4){

            

            echo  "Tu le fais expres ou quoi? pti couillon de mes deux canards je t'ai déjà dit d'aller me chercher mes chaussures et toi tu gambades encore ici? Je vais te dégazeillifier mon gars je te jure tu vas rejoindre les pepsi là bas
            Il sort un flingue et te braque
            T'es mort couillon
            Game Over" . PHP_EOL;
            readline("Appuyez sur Entrée pour continuer...");
            $this->gameOver->GameOver();
            
        }
        if ($this->hasSpoken) {
            $this->NbSpoken++;
            return "Va me chercher mes chaussures couillon";
        }
        $this->hasSpoken = true;
        return $intro;
    }
}

