<?php 

namespace Nawfel\MUD\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Nawfel\MUD\npcs\purgatoire\Grejon;



class Purgatoire extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,1);
    }

    public function name() : string {
        return 'Purgatoire';
    }

    public function description() : string {
        return 'Vous êtes au Purgatoire' . PHP_EOL;
    }

    public function position() : Position {
        return $this->position;
    }
    public function npcs() : array {
        return [new Grejon()];
    }
    public function items() : array {
        return [];
    }
    public function monsters() : array {
        return [];
    }
};