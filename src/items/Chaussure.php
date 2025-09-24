<?php

namespace Nawfel\MUD\items;

use Jugid\Staurie\Game\Item_Equippable;

class Chaussure extends Item_Equippable {

    public function name() : string {
        return 'Chaussure';
    }

    public function description(): string
    {
        return 'Une paire de chaussure carré allant parfaitement avec un distribiteur louche';
    }

    public function body_part(): string {
        return 'foot';
    }

    public function statistics(): array
    {
        return [];
    }
}