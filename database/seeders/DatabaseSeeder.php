<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $azerty =bcrypt('azerty');
        $nb_users = 50;
        for($i = 1; $i <= $nb_users; $i++)
            DB::table('users')->insert([
            'name' => "user$i",
            'email' => "user$i@gmail.com",
            'password' => $azerty,
        ]);

        DB::table('genres')->insert([
            'label' => "SF"
        ]);
        DB::table('genres')->insert([
            'label' => "Comics"
        ]);
        DB::table('genres')->insert([
            'label' => "Policier"
        ]);
        DB::table('genres')->insert([
            'label' => "Drame"
        ]);
        DB::table('genres')->insert([
            'label' => "Comédie"
        ]);

        DB::table('histoires')->insert([
            'titre' => 'z1 ou la vie d\'un demi-octet',
            'pitch' => "z1 n'a pas une vie très compliquée. Quelque soit la question, la réponse se limite à 0 ou 1. 
             En même temps, cela lui permet au mois de représenter des nombres en mode binaire. C'est déjà cela !",
            'photo'  => "/images/bit-1.webp",
            'user_id' => 1,
            'active'=>1,
            'genre_id'=>1
        ]);

        // A
        DB::table('chapitres')->insert([
            'titrecourt' => 'et 1',
            'texte' => "Aujourd'hui z1 ne sait pas trop quel nombre il va représenter. Tout dépend déjà de la première question.",
            'question'  => "Est-ce-qu'il fait beau aujourd'hui ?",
            'histoire_id'  => 1,
            'premier' => 1
        ]);

        // B
        DB::table('chapitres')->insert([
            'titrecourt' => 'et 2',
            'texte' => "Dommage, le ciel est gris. Mais ce n'est pas grave !. Aujourd'hui z1 représentera un petit nombre... Et cette deuxième
 question, où va-t-elle nous amener ?",
            'media' => "https://img.20mn.fr/XDQLMICIT4KqIOy3ubcYIg/310x190_homme-marche-sous-pluie-a-caen-9-juin-2014.jpg",
            'question'  => "Prêt pour aller voir Ready Player One ?",
            'histoire_id'  => 1,
            'premier' => 0
        ]);

        // C
        DB::table('chapitres')->insert([
            'titrecourt' => 'et 2',
            'texte' => "Super, il fait beau !!!! A partir de la, le plus grand bit de z1 est vrai. Quelle fierté. Mais quel suspense, Que va t
 il se passer maintenant ? ",
            'histoire_id'  => 1,
            "question" => "Un tour à la plage ou une marche ?",
            "media" => "https://www.lsa-conso.fr/mediatheque/2/4/0/000144042_5.jpg",
            'premier' => 0
        ]);

        // D
        DB::table('chapitres')->insert([
            'titrecourt' => ' et 3 zéro !!',
            'texte' => "Elle est pourtant bien cette histoire. z1 est vraiment ronchon aujourd'hui. Que des zeros, 
            Il représente donc le néant, le vide, rien, le zéro quoi.. Demain sera un autre jour, espérons que cela finisse mieux",
            'media' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBF26Ci41Ys3I9jbIbYyWF4NAKl6VADyioelHpvGm4b9wJmgza",
            'histoire_id'  => 1,
            'premier' => 0
        ]);

        // E
        DB::table('chapitres')->insert([
            'titrecourt' => ' et 3 zéro !!',
            'texte' => "Super, réprésentant le 1, c'est pas mal d'aller voir Ready Player One !!",
            'media' => "https://img.bfmtv.com/c/1256/708/00f29/b41bac1ae3222f9b727c6198f2e.jpeg",
            'histoire_id'  => 1,
            'premier' => 0
        ]);

        // F
        DB::table('chapitres')->insert([
            'titrecourt' => ' et 3 zéro !!',
            'texte' => "La plage, le soleil, la mer !!! Représenter un 2, ca a du bon quelque fois !",
            "media" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDHh_Cu9fL0f0d-7EejUzb1XzNPyfgu7RZLlUweSswf8anOevY6Q",
            'histoire_id'  => 1,
            'premier' => 0
        ]);

        // G

        DB::table('chapitres')->insert([
            'titrecourt' => ' et 3 zéro !!',
            'texte' => " Belle journée pour z1. Il ne possède que des 1 ! En allant marcher il croisera peut-être les 3 petits cochons. ",
            'histoire_id'  => 1,
            "media" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgrp7jlZZSLC8iejw3NGoSkvo8JCE7VxZ0uhSNuaiVNzVSRydt",
            'premier' => 0
        ]);

        DB::table('suites')->insert([
            'chapitre_source_id' => 1 ,
            'chapitre_destination_id' => 2,
            'reponse' =>'0'
        ]);

        DB::table('suites')->insert([
            'chapitre_source_id' => 1 ,
            'chapitre_destination_id' => 3,
            'reponse' =>'1'
        ]);


        DB::table('suites')->insert([
            'chapitre_source_id' => 2,
            'chapitre_destination_id' => 4,
            'reponse' =>'0'
        ]);

        DB::table('suites')->insert([
            'chapitre_source_id' => 2 ,
            'chapitre_destination_id' => 5,
            'reponse' =>'1'
        ]);
        DB::table('suites')->insert([
            'chapitre_source_id' => 3 ,
            'chapitre_destination_id' => 6,
            'reponse' =>'0'
        ]);

        DB::table('suites')->insert([
            'chapitre_source_id' => 3 ,
            'chapitre_destination_id' => 7,
            'reponse' =>'1'
        ]);

        //------------------------------------------------

        DB::table('histoires')->insert([
            'titre' => 'THX1138',
            'pitch' => "THX1138 est un robot mal dans sa peau et qui cherche un sens à sa vie.",
            'photo'  => "https://m.media-amazon.com/images/M/MV5BYzRiY2I3M2EtODJkMy00NTEyLTgxNmYtYzYwYjk1ZDE1MDE1XkEyXkFqcGdeQXVyNTAyODkwOQ@@.
_V1_UY1200_CR111,0,630,1200_AL_.jpg",
            'user_id' => 2,
            'genre_id' => 1,
            'active' => 1
        ]);
        // 8
        DB::table('chapitres')->insert([
            'titrecourt' => 'Les oracles',
            'texte' => "Le robot, privé de certains capteurs sensoriels, vivait particulièrement mal sa désorientation
temporo-spatiale. Son degré de sensibilité était devenu très élevé avec la mise à jour 2187
version THX 1138. Cette légère défaillance le désobligeait, autant techniquement que parce
qu'elle ternissait sa réputation de modèle incomparable, de must de la robotique
intelligente, de George Clooney version Asimov.


Au seuil de l'atelier, il dut se résoudre à faire ce pour quoi il était pourtant programmé,
demander de l'aide. Issu de la dernière génération des robots dotés d'intelligence artificielle
créée derrière les hauts murs du Consortium Robotique International Libertaire, le CRIL, une
forteresse classée AAA dans les milieux autorisés, il avait appris à choisir.",
            'histoire_id'  => 2,
            "question" => "Sonner ? Téléphoner ? Demander conseil aux trois Fred, les oracles technologiques d'un
monde nouveau, FredH, FredB et FredZ ?",
            "media" => "https://www.cril-limouzi.com/img/lgm-production-logo-1505993315.jpg",
            'premier' => 1
        ]);

        // 9
        DB::table('chapitres')->insert([
            'titrecourt' => 'Boum !',
            'texte' => "La sonnette eut à peine le temps de retentir qu'une déflagration d'une violence
sismique marqua d'une fine rayure son Kevlar renforcé et explosa totalement son
réseau neuronal artificiel en même temps que tout le réseau synaptique de synthèse
associé. Il avait cédé à la plus ancienne des ruses développées par les SolBots,
compter sur un réflexe d’humain : sonner à une porte. Le piège était grossier, il était
tombé dedans. A force de s’humaniser, il eut à peine le temps de comprendre qu’il
mourait d’avoir trop ressemblé aux hommes. **Fin de partie.**",
            'histoire_id'  => 2,
            "media" => "http://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Explosions.jpg/800px-Explosions.jpg",
            'premier' => 0
        ]);

        //10
        DB::table('chapitres')->insert([
            'titrecourt' => 'Dring !',
            'texte' => "La sonnerie du téléphone ne fit que retentir dans un silence assourdissant qui lui
pesa tant qu'il ressentit une solitude poisseuse, presque philosophique. Rien à faire, il
entendait cette musique ultrasonique et familière de la tentative de connexion
neuronale, celle qui avait remplacé les appels classiques. Rien, le néant, le vide
sidéral.",
            'histoire_id'  => 2,
            "media" => "https://cdnb.artstation.com/p/assets/images/images/004/706/561/large/nicolas-martinez-matrix-telephone-1.jpg?148567536
8",
            'premier' => 0,
            "question" => "Ne lui restaient que <b>deux</b> possibilités :"
        ]);

        //11
        DB::table('chapitres')->insert([
            'titrecourt' => 'Help !',
            'texte' => "Les Oracles se tournèrent lentement vers lui, les yeux aussi verts qu'une ligne de code sur
un MO5 et l’écoutèrent attentivement. Après de longs palabres dans une langue connue
d’eux seuls, ils consentirent à lui répondre dans une langue commune. Ils s’avouaient
dépassés, il fallait consulter d’autres devins, capables d’autres formes de divinations, Blam
Blam, Kangoo et Verre brisé, inconnus sous d’autres noms. Seuls ces trois-là sauraient. Peut-
être. La route serait longue, sinueuse, hasardeuse.",
            'histoire_id'  => 2,
            "media" => "https://i.ytimg.com/vi/eVF4kebiks4/maxresdefault.jpg",
            'premier' => 0,
            "question" => "Que faire alors ?"
        ]);

        //12
        DB::table('chapitres')->insert([
            'titrecourt' => 'Spaceshifter',
            'texte' => "En remontant dans son l’habitacle, Un fin sourire trancha son visage en une lame
courbe, il savait que sa conscience serait transférée rapidement dans une autre
enveloppe corporelle en cas de problème. Transhumaniste et Marxiste, il fallait bien
qu’il en reste un pour que ces idées progressistes survivent. Il avait tout prévu. Il ne
savait pas que si ce n’était pas tout à fait sa dernière pensée, ce serait en tout cas le
dernier moment de cette enveloppe robotique. Les Solbots avaient encore frappé. Le
spaceshifter se désintégra sous l’effet cumulé des charges sourdes et subsoniques, la
nouvelle manière de procéder. Aucun bruit, une oppressante sensation de vide et
l’implosion.",
            'histoire_id'  => 2,
            "media" => "http://4everstatic.com/images/art/film-et-serie/battlestar-galactica,-vaisseau-spatial-172243.jpg",
            'premier' => 0,
        ]);

        // 13
        DB::table('chapitres')->insert([
            'titrecourt' => 'Voyage interstellaire',
            'texte' => "Intuitivement, étonné par son incapacité à élaborer un
raisonnement, il leur fit confiance, prit la route qu’ils leur indiquaient et songea
malicieusement à LUH 3417, son âme sœur, sa quête, son Graal, celle qui motivait
ces allers-retours planétaires, sidéraux, ses circuits fatigués, ses calculateurs saturés,
ce soupçon de lassitude inconnu jusqu’alors. Les oracles lui avaient indiqué que ces
trois-là sauraient et lui ne savait rien. Il n’avait pas d’autre choix, il le savait,
intuitivement et rationnellement. LULUH serait peut-être au bout d’un nouveau
voyage. Il y croyait, ne croyait qu’en ça, n’avait plus que ça. Elle était son tout
organique et robotique. En route...",
            'histoire_id'  => 2,
            "media" => "https://i.ytimg.com/vi/aockugeMFyg/maxresdefault.jpg",
            'premier' => 0,
        ]);


        //-------------


        DB::table('suites')->insert([
            'chapitre_source_id' => 8 ,
            'chapitre_destination_id' => 9,
            'reponse' =>'Sonner'
        ]);

        DB::table('suites')->insert([
            'chapitre_source_id' => 8 ,
            'chapitre_destination_id' => 10,
            'reponse' =>'Téléphoner'
        ]);

        DB::table('suites')->insert([
            'chapitre_source_id' => 8 ,
            'chapitre_destination_id' => 11,
            'reponse' =>'Demander conseil au 3 Fred'
        ]);


        DB::table('suites')->insert([
            'chapitre_source_id' => 10 ,
            'chapitre_destination_id' => 11,
            'reponse' =>'consulter les oracles aux yeux d’émeraude'
        ]);

        DB::table('suites')->insert([
            'chapitre_source_id' => 10 ,
            'chapitre_destination_id' => 12,
            'reponse' =>'remonter dans son spaceshifter dans l’hypothétique espoir d’une rencontre miraculeuse'
        ]);
        DB::table('suites')->insert([
            'chapitre_source_id' => 11 ,
            'chapitre_destination_id' => 12,
            'reponse' =>'Rester méfiant et remonter dans son spaceshifter'
        ]);
        DB::table('suites')->insert([
            'chapitre_source_id' => 11 ,
            'chapitre_destination_id' => 13,
            'reponse' =>'Leur faire confiance'
        ]);


        $nb_histoires = 20;
        for($i = 3; $i <= $nb_histoires; $i++) {
            DB::table('histoires')->insert([
                'titre' => "l'histoire vide $i",
                'pitch' => "Ben il n'y a rien on vous dit",
                'photo'  => "/images/bit-1.webp",
                'user_id' => rand(1, $nb_users),
                'active'=>1,
                'genre_id'=>rand(1,5)

            ]);

            // A
            DB::table('chapitres')->insert([
                'titrecourt' => 'Rien ',
                'texte' => "Ca commence ici...  ca s'arrête ici",
                'histoire_id'  => $i,
                'premier' => 1
            ]);

        }

        for($i = 1; $i <= $nb_users; $i++) {
            for($j = 1; $j <= $nb_histoires; $j += 1) {
                if (rand(0, 10) > 7)
                    DB::table("avis")->insert([
                        "histoire_id" => $j,
                        "user_id" => $i,
                        "contenu" => array_map(function($x) {return Str::random(rand(3,10));}, range(0, 9))
                    ]);

                if (rand(0, 10) > 7)
                    DB::table("terminees")->insert([
                        "histoire_id" => $j,
                        "user_id" => $i,
                        "nombre" => rand(1, 5)
                    ]);
            }
        }

        // Une histoire en cours de création pas fini et il manque les liens
        DB::table('histoires')->insert([
            'titre' => 'z1 ou la vie d\'un demi-octet',
            'pitch' => "z1 n'a pas une vie très compliquée. Quelque soit la question, la réponse se limite à 0 ou 1. 
             En même temps, cela lui permet au mois de représenter des nombres en mode binaire. C'est déjà cela !",
            'photo'  => "/images/bit-1.webp",
            'user_id' => 1,
            'active'=>0,
            'genre_id'=>1
        ]);

        // A
        DB::table('chapitres')->insert([
            'titrecourt' => 'et 1',
            'texte' => "Aujourd'hui z1 ne sait pas trop quel nombre il va représenter. Tout dépend déjà de la première question.",
            'question'  => "Est-ce-qu'il fait beau aujourd'hui ?",
            'histoire_id'  => 1,
            'premier' => 1
        ]);

        // B
        DB::table('chapitres')->insert([
            'titrecourt' => 'et 2',
            'texte' => "Dommage, le ciel est gris. Mais ce n'est pas grave !. Aujourd'hui z1 représentera un petit nombre... Et cette deuxième
 question, où va-t-elle nous amener ?",
            'media' => "https://img.20mn.fr/XDQLMICIT4KqIOy3ubcYIg/310x190_homme-marche-sous-pluie-a-caen-9-juin-2014.jpg",
            'question'  => "Prêt pour aller voir Ready Player One ?",
            'histoire_id'  => 1,
            'premier' => 0
        ]);

        // C
        DB::table('chapitres')->insert([
            'titrecourt' => 'et 2',
            'texte' => "Super, il fait beau !!!! A partir de la, le plus grand bit de z1 est vrai. Quelle fierté. Mais quel suspense, Que va t
 il se passer maintenant ? ",
            'histoire_id'  => 1,
            "question" => "Un tour à la plage ou une marche ?",
            "media" => "https://www.lsa-conso.fr/mediatheque/2/4/0/000144042_5.jpg",
            'premier' => 0
        ]);

        // D
        DB::table('chapitres')->insert([
            'titrecourt' => ' et 3 zéro !!',
            'texte' => "Elle est pourtant bien cette histoire. z1 est vraiment ronchon aujourd'hui. Que des zeros, 
            Il représente donc le néant, le vide, rien, le zéro quoi.. Demain sera un autre jour, espérons que cela finisse mieux",
            'media' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBF26Ci41Ys3I9jbIbYyWF4NAKl6VADyioelHpvGm4b9wJmgza",
            'histoire_id'  => 1,
            'premier' => 0
        ]);

        // E
        DB::table('chapitres')->insert([
            'titrecourt' => ' et 3 zéro !!',
            'texte' => "Super, réprésentant le 1, c'est pas mal d'aller voir Ready Player One !!",
            'media' => "https://img.bfmtv.com/c/1256/708/00f29/b41bac1ae3222f9b727c6198f2e.jpeg",
            'histoire_id'  => 1,
            'premier' => 0
        ]);

        // F
        DB::table('chapitres')->insert([
            'titrecourt' => ' et 3 zéro !!',
            'texte' => "La plage, le soleil, la mer !!! Représenter un 2, ca a du bon quelque fois !",
            "media" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDHh_Cu9fL0f0d-7EejUzb1XzNPyfgu7RZLlUweSswf8anOevY6Q",
            'histoire_id'  => 1,
            'premier' => 0
        ]);




    }




}
