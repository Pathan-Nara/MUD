<?php
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;
use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Inventory\Inventory;

require_once __DIR__.'/../vendor/autoload.php';

$staurie = new Staurie('Crockie prime');

$staurie->register([Console::class, PrettyPrinter::class, Menu::class, MainCharacter::class, Map::class, Inventory::class, Introduction::class]);


$container = $staurie->getContainer();
$menu = $container->registerComponent(Menu::class);
$menu->configuration([
 'text'=> 'Welcome to this awesome test adventure',
 'labels'=> [
 'new_game' => 'Enter the world',
 'quit'=> 'Exit game',
 ]
]);


$map = $container->registerComponent(Map::class);
$map->configuration([
 'directory'=>__DIR__.'/maps',
 'namespace'=>'Nawfel\MUD\maps',
 'navigation'=>true,
 'map_enable'=>true,
 'compass_enable'=>true
]);

$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'text'=>[
        "
        C'est l'histoire de Crocki le malicieux et son ami Ngrok le chien a Garfield
        Ils partent a l'aventure de la grejonite X afin de soigner leur ami Grejon de sa terrible grejonite aigue
        Ensemble ils vont devoir parcourir la ligne 13 et en affronter les multiples dangers
        voix inconnu: Crocki Crocki reveil toi
        Votre vision est trouble, vous entendez une voix dans votre tete
        Votre chien ngrok vous lèche le visage
        crocki: hein quoi qu'est qu'il se passe 
        Vous vous reveillez petit a petit sur un banc abandonné au milieu de chatelet...
        crocki: ahhh qu'est qu'il s'est passé ptn
        crocki: c'est quoi cet voix dans ma tete
        ngrok: wouf wouf
        crocki: et je suis ou la ??" . PHP_EOL,
    ],
    'title'=>'Crocki Nguyen et Ngrok Dembele a la recherche de la grejonite X',
    'scrolling'=>True
]);


$staurie->run();
