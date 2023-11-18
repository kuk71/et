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
            "content" => "Склонение существительных и прилагательных в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "Существительные и прилагательные в английском языке, в отличие от русского языка, не склоняются, т. е. не изменяются по падежам; вместо этого употребляются предлоги.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Give that book to Father!", "Дай ту книгу отцу!", "с предлогом"],
                ["Give Father that book!", "Дай отцу ту книгу!", "без предлога"],
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