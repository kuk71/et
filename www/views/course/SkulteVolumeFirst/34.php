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
            "content" => "Географические названия в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "Слово «<i>юг</i>» по-английски пишется с большой буквы «South». Выражение «in the South» переводится как «<i>на юге</i>».",
        ],
        [
            "type" => "content",
            "content" => "Перед названиями рек морей, озёр и океанов ставится определённый артикль «the».",
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>The B</b>lack Sea", "Чёрное море", ""],
                ["<b class='color'>The V</b>olga", "Волга", ""],
                ["<b class='color'>The A</b>tlantic", "Атлантический океан", ""],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 2,
];

$lessonParts[] = [
    "type" => "speaking",
];
