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
            "content" => "Артикль «the» перед уникальными предметами в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "Перед существительными, которые означают единственный предмет в мире, ставится определённый артикль «the».",
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>the</b> moon", "луна", ""],
                ["<b class='color'>the</b> sun", "солнце", ""],
                ["<b class='color'>the</b> sky", "небо", ""],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];

$lessonParts[] = [
    "type" => "speaking",
];