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
            "content" => "Present Continuous Tense (настоящее продолженное время).",
        ],
        [
            "type" => "content",
            "content" => "Present Continuous Tense (настоящее продолженное время) употребляется часто вместо будущего, 
                когда действие обусловлено или решено заранее.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Mr. Dale is going away next week.", "Мистер Дэйл уезжает на следующей неделе."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];
