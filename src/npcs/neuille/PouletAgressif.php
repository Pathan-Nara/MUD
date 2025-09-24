<?php

namespace Nawfel\MUD\npcs\neuille;
use Jugid\Staurie\Game\Npc;

class PouletAgressif extends Npc {

    public function name() : string {
        return 'Poulet_Agressif';
    }

    public function description() : string {
        return 'Un poulet enragé qui n\'hésite pas à attaquer.';
    }


    public function speak() : string|array {

        if (!$this->playerHasItem("Traducteur Poulemique")) {
            return "cot cot";
        } else {
            echo "Grrr... Je suis un poulet agressif !" . PHP_EOL;
            echo "tu me croie faible ? tu vas voir" . PHP_EOL;
            echo "Le poulet agressif vous picore sauvagement et les autres poulet le rejoignent pour picorer Ngrok" . PHP_EOL;
            echo "meurt par picorage respcte le poulet !!" . PHP_EOL;
            exit;
        }
    }
}
