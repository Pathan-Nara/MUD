<?php

namespace Nawfel\MUD\items;

use Jugid\Staurie\Game\Item_Equippable;

class Piece extends Item_Equippable {

    public function name() : string {
        return 'Piece';
    }

    public function description(): string
    {
        return 'Une pièce de 5 euros';
    }

    public function body_part(): string { 
        return 'pocket';
    }

    public function statistics(): array
    {
        return [];
    }
}