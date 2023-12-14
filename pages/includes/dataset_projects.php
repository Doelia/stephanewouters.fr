<?php

$projects = [
    [
        'id' => 'ants',
        'name' => 'Ants simulator',
        'year' => '2023',
        'description' => 'Un simulateur de colonies de fourmis. Les fourmis doivent rapporter la nourriture à leur nid, en se servant uniquement de phéromones.',
        'technologies' => [
            'Canvas' => ['bg-html', 'fa-brands fa-html5'],
            'React' => ['bg-react', 'fa-brands fa-react'],
        ],
        'links' => [
            'Play' => ['fa-regular fa-external-link', 'https://ants.doelia.fr'],
            'Source code' => ['fa-brands fa-github', 'https://github.com/doelia/ants']
        ],
    ],
    [
        'id' => 'pk',
        'name' => 'Progress Knight: Remastered',
        'year' => '2023',
        'description' => 'Un jeu incrémental mobile en solo. Vous incarnez un jeune chevalier qui doit progresser au fil de sa vie pour acquérir des compétences, pratiquer des métiers et accumuler des richesses.',
        'technologies' => [
            'React native' => ['bg-react', 'fa-brands fa-react'],
        ],
        'links' => [
            'iOS' => ['fa-brands fa-apple', 'https://stephanewouters.fr/pk'],
            'Android' => ['fa-brands fa-android', 'https://stephanewouters.fr/pk'],
        ],
    ],
    [
        'id' => 'playthatmap',
        'name' => 'PlayThatMap',
        'year' => '2023',
        'description' => "Un service d'hébergement de maps Minecraft. Les maps proposées sont testées et préconfigurées pour être jouées facilement en multijoueur.",
        'technologies' => [
            'AWS' => ['bg-aws', 'fa-brands fa-aws'],
            'Docker' => ['bg-docker', 'fa-brands fa-docker'],
            'Symfony' => ['bg-dark', 'fa-brands fa-symfony'],
        ],
        'links' => [
            'playthatmap.net' => ['fa-regular fa-external-link', 'https://playthatmap.net'],
        ],
    ],
    [
        'id' => 'bakamongo',
        'name' => 'Bakamon GO!',
        'year' => '2022',
        'description' => "Un jeu inspiré par la BD parodique Bakamon et Pokémon Go. Vous incarnez Crétin et vous partez à la recherche des Bakamon sur une carte virtuelle. Entubez-les tous !",
        'technologies' => [
            'Symfony' => ['bg-dark', 'fa-brands fa-symfony'],
            'PostgreSQL' => ['bg-postgres', 'fa-solid fa-database'],
            'PgRouting' => ['bg-postgres', 'fa-solid fa-route'],
            'React' => ['bg-react', 'fa-brands fa-react'],
            'OpenLayers' => ['bg-openlayers', 'fa-solid fa-map'],
            'Mercure' => ['bg-mercure', 'fa-solid fa-temperature-three-quarters'],
        ],
        'links' => [
            'Play' => ['fa-regular fa-play', 'https://bakamon.doelia.fr/'],
        ],
    ],
    [
        'id' => 'gemwar',
        'name' => 'Gemwar.io',
        'year' => '2022',
        'description' => "Un jeu IDLE multijoueur, le but est de voler les ressources des autres joueurs pour monter dans les classements.",
        'technologies' => [
            'Node.JS' => ['bg-nodejs', 'fa-brands fa-node-js'],
            'Socket.io' => ['bg-dark', 'fa-brands fa-node-js'],
            'Vue.js' => ['bg-vuejs', 'fa-brands fa-vuejs'],
            'PostgreSQL' => ['bg-postgres', 'fa-solid fa-database'],
        ],
        'links' => [
            'Play' => ['fa-regular fa-play', 'https://gemwar.io'],
        ]
    ],
    [
        'id' => 'piopio',
        'name' => 'PioPio Family',
        'year' => '2022',
        'description' => "Un clone de CryptoKitties. Un projet qui m'a permis de découvrir Web3, la blockchain Ethereum et les smart contracts.",
        'technologies' => [
            'Blockchain' => ['bg-eth', 'fa-brands fa-ethereum'],
            'Symfony' => ['bg-dark', 'fa-brands fa-symfony'],
            'Vue.js' => ['bg-vuejs', 'fa-brands fa-vuejs'],
            'PostgreSQL' => ['bg-postgres', 'fa-solid fa-database'],
        ],
        'links' => [
        ],
    ],
    [
        'id' => 'teletravail',
        'name' => 'Planning télétravail',
        'year' => '2021',
        'description' => "Une application super simple que j'ai développée pour mon entreprise. Elle permet de gérer les jours de télétravail des employés.",
        'technologies' => [
            'Node.JS' => ['bg-nodejs', 'fa-brands fa-node-js'],
            'Socket.io' => ['bg-dark', 'fa-brands fa-node-js'],
            'Vue.js' => ['bg-vuejs', 'fa-brands fa-vuejs'],
        ],
        'links' => [
            'Demo' => ['fa-regular fa-play', 'https://planning-teletravail.doelia.fr/'],
            'Source code' => ['fa-brands fa-github', 'https://github.com/Doelia/planning-teletravail'],
        ]
    ],
    [
        'id' => 'bot_dofus',
        'name' => 'Bot Dofus Retro',
        'year' => '2018',
        'description' => "Un bot Dofus conçu avec la stratégie man-in-the-middle. Le programme tourne en tant que proxy et intercepte les paquets pour les modifier et simuler les actions du joueur.",
        'technologies' => [
            'Golang' => ['bg-golang', 'fa-brands fa-golang'],
        ],
        'links' => [
            'Source code' => ['fa-brands fa-github', 'https://github.com/doelia/dofus-middleware']
        ]
    ],
    [
        'id' => 'narrative_editor',
        'name' => 'Fiction story editor',
        'year' => '2019',
        'description' => "Un éditeur pour créer des scénarios d'histoires narratives sous la forme de conversations SMS.",
        'technologies' => [
            'Angular' => ['bg-angular', 'fa-brands fa-angular'],
            'Material design' => ['bg-react', 'fa-brands fa-angular'],
        ],
        'links' => [
//            'Demo' => ['fa-regular fa-play', 'https://fish-flocking.doelia.fr/'],
//            'Source code' => ['fa-brands fa-github', 'https://github.com/doelia/fish-flocking']
        ]
    ],
    [
        'id' => 'fishflocking',
        'name' => 'Fish Flocking',
        'year' => '2018',
        'description' => 'Un simulateur de bancs de poissons en HTML en utilisant de la programmation orientée agent. Créé pour le site web de poisson-soluble.com.',
        'technologies' => [
            'Canvas' => ['bg-html', 'fa-brands fa-html5'],
            'Vanilla JS' => ['bg-js', 'fa-brands fa-js'],
        ],
        'links' => [
            'Demo' => ['fa-regular fa-play', 'https://fish-flocking.doelia.fr/'],
            'Source code' => ['fa-brands fa-github', 'https://github.com/doelia/fish-flocking']
        ]
    ],
    [
        'id' => 'survivia',
        'name' => 'Survivia',
        'year' => '2015',
        'description' => "Un serveur Minecraft PVP que j'ai fondé et géré de 2012 à 2015. Communauté de 300 000 membres. Réseau de 12 serveurs Linux.",
        'technologies' => [
            'Java' => ['bg-java', 'fa-brands fa-java'],
            'MySQL' => ['bg-mysql', 'fa-solid fa-database'],
            'Linux' => ['bg-dark', 'fa-brands fa-linux'],
        ],
        'links' => [
            'Mode de jeux' => ['fa-regular fa-play', 'https://survivia.net'],
            'Memory fan video' => ['fa-brands fa-youtube', 'https://www.youtube.com/watch?v=VKrGqg8MAX0'],
        ]
    ],
    [
        'id' => 'heliko',
        'name' => 'Heliko',
        'year' => '2015',
        'description' => 'Un jeu de rythme mobile, développé pendant mon master dans un cadre universitaire.',
        'technologies' => [
            'Unity' => ['bg-dark', 'fa-brands fa-unity'],
        ],
        'links' => [
            'Download' => ['fa-brands fa-android', 'https://stephanewouters.fr/games/heliko/'],
        ]
    ],
    [
        'id' => 'bourbaki',
        'name' => 'Jeu du petit carré',
        'year' => '2014',
        'description' => 'Jeu au tour par tour, chaque joueur pose un trait sur une grille. Le but est de former un carré. Le joueur qui forme le plus de carrés gagne.',
        'technologies' => [
            'Golang' => ['bg-golang', 'fa-brands fa-golang'],
            'Socket.io' => ['bg-dark', 'fa-brands fa-node-js'],
            'Vanilla JS' => ['bg-js', 'fa-brands fa-js'],
        ],
        'links' => [
            'Source code' => ['fa-brands fa-github', 'https://github.com/doelia/bourbaki'],
        ]
    ],
    [
        'id' => 'whiteboard',
        'name' => 'Whiteboard',
        'year' => '2014',
        'description' => 'Un tableau blanc collaboratif en ligne',
        'technologies' => [
            'Node.JS' => ['bg-nodejs', 'fa-brands fa-node-js'],
            'Socket.io' => ['bg-dark', 'fa-brands fa-node-js'],
            'Vanilla JS' => ['bg-js', 'fa-brands fa-js'],
        ],
        'links' => [
            'Demo' => ['fa-regular fa-play', 'https://whiteboard.doelia.fr/'],
            'Source code' => ['fa-brands fa-github', 'https://github.com/Doelia/realtimeboard']
        ]
    ],
    [
        'id' => 'defensia',
        'name' => 'Tower defense multiplayer',
        'year' => '2013',
        'description' => 'Un jeu de tower defense multijoueur en ligne.',
        'technologies' => [
            'PHP' => ['bg-php', 'fa-brands fa-php'],
            'pthreads' => ['bg-php', 'fa-brands fa-php'],
            'Vanilla JS' => ['bg-js', 'fa-brands fa-js'],
        ],
        'links' => [
            'Source code' => ['fa-brands fa-github', 'https://github.com/doelia/defensia'],
        ],
    ],
    [
        'id' => 'dominion',
        'name' => 'Dominion',
        'year' => '2012',
        'description' => 'Un clone libre du jeu de cartes Dominion. Jouable en ligne en multijoueur.',
        'technologies' => [
            'Java' => ['bg-java', 'fa-brands fa-java'],
            'Vanilla JS' => ['bg-js', 'fa-brands fa-js'],
        ],
        'links' => [
            'Demo' => ['fa-regular fa-play', 'https://dominion.doelia.fr/'],
            'Source code' => ['fa-brands fa-github', 'https://github.com/doelia/dominion'],
        ],
    ],
    [
        'id' => 'minelia',
        'name' => 'Minelia',
        'year' => '2012',
        'description' => 'Un jeu web de stratégie, réalisé en 48h pour le Ludum Dare.',
        'technologies' => [
            'jQuery' => ['bg-jquery', 'fa-brands fa-js'],
        ],
        'links' => [
            'Play' => ['fa-regular fa-play', 'https://minelia.doelia.fr/'],
            'Source code' => ['fa-brands fa-github', 'https://github.com/doelia/minelia'],
        ],
    ],
    [
        'id' => 'swarius',
        'name' => 'Swarius',
        'year' => '2010',
        'description' => "Mon premier projet d'envergure, celui qui m'a donné la passion. J'étais en charge du site web du serveur privé Dofus Swarius. Communauté de plus d'un million de membres.",
        'technologies' => [
            'PHP' => ['bg-php', 'fa-brands fa-php'],
            'MySQL' => ['bg-mysql', 'fa-solid fa-database'],
        ],
        'links' => [
        ]
    ],
    [
        'id' => 'doewar',
        'name' => 'DoeWar',
        'year' => '2009',
        'description' => "Mon premier projet PHP, réalisé à 16 ans. Un jeu IDLE multijoueur, ancêtre de Gemwar.io.",
        'technologies' => [
            'PHP 5.2' => ['bg-php', 'fa-brands fa-php'],
            'MySQL' => ['bg-mysql', 'fa-solid fa-database'],
        ],
        'links' => [
            'Play' => ['fa-regular fa-play', 'https://doewar-2009.doelia.fr/'],
            'Source code' => ['fa-brands fa-github', 'https://github.com/Doelia/doewar-2009'],
        ],
    ]
];

$projects_per_year = [];
foreach ($projects as $project) {
    $projects_per_year[$project['year']][] = $project;
}

$years = array_keys($projects_per_year);
rsort($years);
