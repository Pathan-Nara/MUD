<?php 

namespace Nawfel\MUD\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Nawfel\MUD\npcs\neuille\HommeAuLongNezCrochu;
use Nawfel\MUD\npcs\neuille\PouletAgressif;
use Nawfel\MUD\npcs\neuille\PouletBassem;
use Nawfel\MUD\npcs\neuille\PouletChaussure;


class Neuille extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,0);
    }

    public function name() : string {
        return 'Neuille';
    }

    public function description() : string {
        return 'Vous êtes à Neuille' . PHP_EOL;
    }

    public function position() : Position {
        return $this->position;
    }
    public function npcs() : array {
        return [new HommeAuLongNezCrochu(), new PouletAgressif(), new PouletBassem(), new PouletChaussure()];
    }
    public function items() : array {
        return [];
    }
    public function monsters() : array {
        return [];
    }
};