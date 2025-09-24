<?php

namespace Nawfel\MUD\npcs\neuille;
use Jugid\Staurie\Game\Npc;
use Nawfel\MUD\items\Traducteur;
use Jugid\Staurie\Component\Inventory\Inventory;

class HommeAuLongNezCrochu extends Npc {


    private Inventory $inventory;

    public function __construct() {
        $this->inventory = new Inventory();
    }

    public function name() : string {
        return 'Homme_au_long_nez_crochu';
    }

    public function description() : string {
        return 'Un vieille homme au long nez crochu, avec une barbe hirsute de longs vetements amples et sombre et un grand chapeau noir. Il a vraiment l\'air louche et semble vous fixer intensément.';
    }


    private bool $hasSpoken = false;

    public function speak() : string|array {
        if (!$this->hasSpoken) {
            $intro = "Salut a toi l'etranger, je suis Maxime, tu vois tout ces poulet qui courent partout? T'aimerais leurs parler hein ? Eheheh j'ai une solution ca t'interesse ?";

            echo $intro . PHP_EOL;
            $output = [];
            $output[] = "Que faire ?";
            $output[] = "1. Ouais je veux bien";
            $output[] = "2. C'est qui ce fou de la gare ???";
            $output[] = "3. Ordonner a Ngrok de l'attaquer";
            echo implode(PHP_EOL, $output) . PHP_EOL;
            return [...$this->choices()];
        }
        return ["l'homme au long nez crochu a disparu"];
    }

    public function choices() : array {
        $output = [];
        $choice = readline("Votre choix (1-3): ");

        switch($choice) {
            case '1':
                $intro_response = [];
                $intro_response[] = "Ok je vais te donner ce superbe Traducteur Poulemique que j'ai fabriqué moi même, mais en échange tu vas devoir répondre à mon quiz sur les poulets de la gare" . PHP_EOL;
                echo implode(PHP_EOL, $intro_response) . PHP_EOL;
                
                $question1 = [];
                $question1[] = "Homme au long nez crochu: Première question, comment s'appelle le chef des poulets de la gare ?";
                $question1[] = "1. Le Poulet Chaussure";
                $question1[] = "2. Le poulet Bassem";
                $question1[] = "3. Le poulet Macron";
                $question1[] = "4. Moi";
                echo implode(PHP_EOL, $question1) . PHP_EOL;
                $reponse1 = readline("Votre réponse (1-4): ");
                
                if($reponse1 == "2"){
                    $reponse1_text = [];
                    $reponse1_text[] = "Homme au long nez crochu: Pas mal gamin tu as l'air de t'y connaître un peu, deuxième question" . PHP_EOL;
                    echo implode(PHP_EOL, $reponse1_text) . PHP_EOL;
                    
                    $question2 = [];
                    $question2[] = "Homme au long nez crochu: Deuxième question, comment s'appelle l'excroissance sur le bec du poussin qu'il utilise pour percer sa coquille à la naissance ?";
                    $question2[] = "1. Le bec";
                    $question2[] = "2. Le chicken nugget";
                    $question2[] = "3. L'ergot";
                    $question2[] = "4. Le diamant";
                    echo implode(PHP_EOL, $question2) . PHP_EOL;
                    $reponse2 = readline("Votre réponse (1-4): ");
                    
                    if($reponse2 == "4"){
                        $reponse2_text = [];
                        $reponse2_text[] = "Homme au long nez crochu: Incroyable tu es un vrai expert en poulet, voici la dernière question" . PHP_EOL;
                        echo implode(PHP_EOL, $reponse2_text) . PHP_EOL;
                        
                        $question3 = [];
                        $question3[] = "Homme au long nez crochu: Quel est le mot préféré du Poulet Chaussure ?";
                        $question3[] = "1. Bok Bok";
                        $question3[] = "2. Cot Cot";
                        $question3[] = "3. Coin Coin";
                        $question3[] = "4. bark bark";
                        echo implode(PHP_EOL, $question3) . PHP_EOL;
                        $reponse3 = readline("Votre réponse (1-4): ");
                        
                        if($reponse3 == "1"){
                            $output[] = "Homme au long nez crochu: Incroyable tu es vraiment le roi des poulets tu mérites vraiment ce traducteur poulemique";
                            $output[] = "Homme au long nez crochu: Maintenant tu vas pouvoir parler aux poulets de la gare, mais fais attention ils sont un peu agressifs";
                            $this->giveItem(new Traducteur());
                            $output[] = "Homme au long nez crochu: Allez je me casse j'ai pas que ça à faire moi";
                            $this->hasSpoken = true;
                        }
                        else {
                            $output[] = "Homme au long nez crochu: Dommage ce n'est pas la bonne réponse, tu n'auras pas le traducteur poulemique";
                        }
                    }
                    else {
                        $output[] = "Homme au long nez crochu: Dommage ce n'est pas la bonne réponse, tu n'auras pas le traducteur poulemique";
                    }
                } 
                else {
                    $output[] = "Homme au long nez crochu: Dommage ce n'est pas la bonne réponse, tu n'auras pas le traducteur poulemique";
                }
                break;

            case '2':
                $output[] = "L'homme au long nez crochu n'a pas l'air d'aimer votre ton agressif";
                $output[] = "Homme au long nez crochu: Espèce de c*n va falloir que je t'apprenne les bonnes manières";
                $output[] = "Homme au long nez crochu: Allez voir ailleur si j'y suis !";
                $output[] = "L'homme au long nez crochu disparrait dans comme par magie vous sentez que vous avez perdu quelque chose...";
                $this->hasSpoken = true;
                break;

            case '3':
                $output[] = "Ngrok obéis à votre ordre et saute sur son nez crochu qui pendouille";
                $output[] = "L'homme au long nez crochu pousse un cri de douleur et s'effondre au sol, son pass navigo tombe à terre";
                echo implode(PHP_EOL, $output) . PHP_EOL;
                $choice2 = readline("Prendre le pass navigo ? (o/n): ");
                $output = []; // reset output for next messages
                if (strtolower($choice2) === 'o') {
                    $output[] = "Vous avez pris le pass navigo";
                    $output[] = "Homme au long nez crochu: Non mais je rêve ! Non seulement vous m'attaquez mais en plus vous me volez ! C'est vraiment une société de c*n !";
                    $output[] = "L'homme au long nez charge un puissant sortilège canalisant l'énergie nasale de tous les poulets de la gare...";
                    $output[] = "Homme au long nez crochu: Toi et ton clébard vous allez me le payer !";
                    $output[] = "Vous subissez une violente attaque magique provoquant une douleur atroce dans votre nez et votre cerveau...";
                    $output[] = "Voler c'est mal ! Et agresser des vieux c'est pire !";
                    $output[] = "GAME OVER";
                } else {
                    $output[] = "Vous n'avez pas pris le pass navigo";
                    $output[] = "Homme au long nez crochu: Non mais je rêve ! Non seulement vous m'attaquez mais en plus vous me volez pas ! C'est vraiment une société de m*rde !";
                    $output[] = "L'homme au long nez vous assomme avec son long nez crochu";
                    $output[] = "GAME OVER (laissez ce vieux en paix)";
                }
                break;

            default:
                $output[] = "Choix invalide, l'homme au long nez vous vous assomme par défaut va falloir arreter de jouer au c*n";
                break;
        }
        return $output;
    }
}
