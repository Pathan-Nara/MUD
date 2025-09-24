<?php

namespace Nawfel\MUD\items;

use Jugid\Staurie\Game\Item_Equippable;

class PassNavigo extends Item_Equippable {

    public function name() : string {
        return 'Pass Navigo';
    }

    public function description(): string
    {
        return 'Un simple Pass Navigo';
    }

    public function body_part(): string { 
        return 'pocket';
    }

    public function statistics(): array
    {
        return [];
    }
}