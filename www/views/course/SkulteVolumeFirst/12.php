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
            "content" => "Использование словосочетания «This is ...» в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "В английском языке словосочетание «This is ...» означает: «Это (есть) ...»",
        ],
        [
            "type" => "example",
            "content" => [
                ["This is a box.", "Это коробка.", "Это является коробкой / Это есть коробка."],
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