<?php

namespace Nawfel\MUD\items;

use Jugid\Staurie\Game\Item_Equippable;

class Traducteur extends Item_Equippable {

    public function name() : string {
        return 'Traducteur Poulemique';
    }

    public function description(): string
    {
        return 'Un traducteur pour les poules';
    }

    public function body_part(): string { 
        return 'ear';
    }

    public function statistics(): array
    {
        return [];
    }
}