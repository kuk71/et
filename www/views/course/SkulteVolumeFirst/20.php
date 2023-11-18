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
            "content" => "Предлог «on» в английском языке",
        ],
        [
            "type" => "content",
            "content" => "Существительное с предлогом «on» отвечает на вопрос «<i>где?</i>» в значении «<i>находиться на чём-то</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["on the table", "на столе", ""],
                ["on the chair", "на стуле", ""],
                ["on the plate", "на тарелке", ""],
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