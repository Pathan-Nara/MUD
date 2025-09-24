<?php

namespace Nawfel\MUD\npcs\neuille;
use Jugid\Staurie\Game\Npc;
use Nawfel\MUD\items\Chaussure;

class PouletBassem extends Npc {

    public function name() : string {
        return 'Poulet_Bassem';
    }

    public function description() : string {
        return 'Un poulet roi du Caire';
    }

    private bool $hasWon = false;

    private bool $hasSpoken = false;

    public function speak() : string|array {

        if (!$this->playerHasItem("Traducteur Poulemique")) {
            return "cot cot";
        } else {
            echo "Salut, je suis Bassem, le roi des poulets du Caire" . PHP_EOL;
            echo "Tu veux des chaussures ? pas de problème" . PHP_EOL;
            $this->giveItem(new Chaussure());
            return "Voici des chaussures, elles sont pour toi";
        }
    }
}
