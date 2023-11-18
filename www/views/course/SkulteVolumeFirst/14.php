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
            "content" => "Особенности применения в английском языке артиклей «a» и «the» с прилагательными и числительными.",
        ],
        [
            "type" => "content",
            "content" => "Если перед существительным стоит прилагательное («красный», «синий», «большой», «хороший» и т. д.), то это прилагательное ставится между артиклем и существительным.",
        ],
        [
            "type" => "example",
            "content" => [
                ["a flag — a red flag"],
                ["a goat — a white goat"],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если перед существительными стоит числительное («один», «два», «три» и т. д.), притяжательное местоимение («мой», «твой», «ваш» и т. д.) или указательное местоимение («этот», «тот»), то артикль не ставится.",
        ],
        [
            "type" => "example",
            "content" => [
                ["a dog — one dog — your dog — this dog"],
                ["the girl — one girl — her girl — that girl"],
            ],
        ]
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