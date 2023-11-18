<?php
/** @var $lessonParams - массив параметров урока. Получен из контроллера */

$lessonParts[] = [
    "type" => "WordsToStudy",
];

$lessonParts[] = [
    "type" => "theory",
    "content" => [
        [
            "type" => "header",
            "content" => "Глагол «may».",
        ],
        [
            "type" => "content",
            "content" => "Глагол «may» («могу») в значении «имею разрешение» имеет только два времени: Настоящее 
                неопределённое время (Present Indefinite Tense) — «may» и прошедшее неопределённое время (Past 
                Indefinite Tense) — «might». В будущем времени глагол «may» заменяется выражением «to be allowed» - 
                «быть позволенным» («shall be allowed» или «will be allowed» - «будет позволено»).",
        ],
        [
            "type" => "example",
            "content" => [
                ["Polly is sure that Jimmy will be allowed to go to the forest with her.", "Поля уверена, что Джимми разрешат пойти с ней в лес."],
            ],
        ],
        [
            "type" => "content",
            "content" => "В некоторых случаях глагол «may» передаёт значение сомнения или предположения.",
        ],
        [
            "type" => "example",
            "content" => [
                ["They may forget to buy bread.", "Вероятно, они забудут купить хлеб."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];


