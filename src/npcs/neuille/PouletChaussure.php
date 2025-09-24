<?php

namespace Nawfel\MUD\npcs\neuille;
use Jugid\Staurie\Game\Npc;

class PouletChaussure extends Npc {

    public function name() : string {
        return 'Poulet_Chaussure';
    }

    public function description() : string {
        return 'Un poulet qui aime les chaussures';
    }

    public function speak() : string|array {

        if (!$this->playerHasItem("Traducteur Poulemique")) {
            return "cot cot";
        } else {
            echo "tu pensais j'allais te donner les chaussure comme ça ??" . PHP_EOL;
            echo "meurt mécréant" . PHP_EOL;
            readline("Appuyez sur Entrée pour continuer...");
            exit;
        }
    }
}
