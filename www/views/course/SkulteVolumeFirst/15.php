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
            "content" => "Особенности применения в английском языке артикля «an».",
        ],
        [
            "type" => "content",
            "content" => "Если существительное начинается с гласной буквы, то перед ним вместо неопределённого артикля «a» употребляется неопределённый артикль «an».",
        ],
        [
            "type" => "example",
            "content" => [
                ["a flag", "флаг"],
                ["an umbrella", "зонт"],
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