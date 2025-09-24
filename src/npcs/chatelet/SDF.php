<?php

namespace Nawfel\MUD\npcs\chatelet;
use Jugid\Staurie\Game\Npc;
use Nawfel\MUD\items\PassNavigo;
use Jugid\Staurie\Game\GameOver;

class SDF extends Npc {

    private GameOver $gameOver;

    public function name() : string {
        return 'SDF';
    }

    public function description() : string {
        return 'Un sans abri bourré';
    }

    public function __construct() {
        $this->gameOver = new GameOver();
    }

    private bool $hasWon = false;

    private bool $hasSpoken = false;

    public function speak() : string|array {
        if (!$this->hasSpoken) {
            $this->hasSpoken = true;
            $intro = "*un sdf bourré marche vers crocki*
sdf: eh connard t'es sur mon banc la... eh mais c'est dla vody donne moi ca
crocki: hein mais mais c'est qui lui ????
*ngrok se met en position de defense*
le sdf charge brutalement..." . PHP_EOL;

            echo $intro . PHP_EOL;
            $output = [];
            $output[] = "Que faire ?";
            $output[] = "1. Effectuer une roulade entre ses jambes pour éviter" . PHP_EOL;
            $output[] = "2. CHARGEZZZZZZ" . PHP_EOL;
            $output[] = "3. Lui faire un câlin" . PHP_EOL;
            $output[] = "4. Lui jeter la bouteille de vody dessus" . PHP_EOL;
            echo implode(PHP_EOL, $output) . PHP_EOL;
            return [...$this->choices()];
        }
        return ["le sdf est parti"];
    }


    public function choices() : array {

        $choice = readline("Votre choix (1-4): ");

        switch($choice) {
            case '1':
                $output[] = "Vous roulez entre les jambes du sdf et le SDF tombe sur les rails du metro";
                $output[] = "SDF: Ostie de merle t'es calice fort pour un gréjonien" . PHP_EOL;
                $output[] = "crocki: kestum raconte le viok c'est quoi ca gréjonien encore t'es high on crack ou quoi blud" . PHP_EOL;
                $output[] = "*bruit de metro qui arrive*" . PHP_EOL;
                $output[] = "SDF: *Rire de Québécoi*" . PHP_EOL;
                $output[] = "*Le metro passe mais le SDF disparait dans une brume pourpre à l'odeur nauséabonde*" . PHP_EOL;
                $output[] = "crocki: bordel de pignouf c'etait quoi ca" . PHP_EOL;
                $output[] = "ngrok: *bark bark*" . PHP_EOL;
                $this->hasWon = true;
                $this->giveItem(new PassNavigo());
                break;

            case '2':
                $output[] = "*vous chargez sur le SDF*" . PHP_EOL;
                $output[] = "SDF: C'est qulé c*n stenfant sanglier lo" . PHP_EOL;
                $output[] = "Le SDF vous a brisé les os" . PHP_EOL;
                $output[] = "SDF: Gros naze :catlaugh:" . PHP_EOL;
                $output[] = "GAME OVER" . PHP_EOL;
                
                break;

            case '3':
                $output[] = "Vous vous jetez dans les bras du SDF" . PHP_EOL;
                $output[] = "SDF: Eh calice qu'est ce que tu fais la mon minot" . PHP_EOL;
                $output[] = "Le SDF vous serre fort dans ses bras" . PHP_EOL;
                $output[] = "*Il vous tabasse*" . PHP_EOL;
                $output[] = "GAME OVER" . PHP_EOL;
                break;

            case '4':
                $output[] = "Vous jetez la bouteille de vody au SDF" . PHP_EOL;
                $output[] = "SDF: Eh calice c'est quoi ca c'est de la vody de la mort" . PHP_EOL;
                $output[] = "Le SDF est revigoré, une lueur de folie dans les yeux, une aura de surpuissance l'entoure" . PHP_EOL;
                $output[] = "SDF: J'vais t'apprendre la politesse espèce de calice de merde" . PHP_EOL;
                $output[] = "Le SDF vous attrape par la jambe et vous balance sur le sol brutalement" . PHP_EOL;
                $output[] = "SDF: Ostie de calice de merle" . PHP_EOL;
                $output[] = "GAME OVER" . PHP_EOL;
                break;

            default:
                $output[] = "Choix invalide, le SDF vous défonce par défaut";
                $output[] = "GAME OVER";
                break;
        }
        return $output;
    }
}
