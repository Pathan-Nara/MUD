<?php 

namespace Nawfel\MUD\maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Nawfel\MUD\npcs\chatelet\SDF;
use Nawfel\MUD\npcs\chatelet\Distributeur;


class Chatelet extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,0);
    }

    public function name() : string {
        return 'Chatelet';
    }

    public function description() : string {
        return 'Vous êtes à Chatelet' . PHP_EOL;
    }

    public function position() : Position {
        return $this->position;
    }
    public function npcs() : array {
        return [new SDF(), new Distributeur()];
    }
    public function items() : array {
        return [];
    }
    public function monsters() : array {
        return [];
    }
};