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
            "content" => "Наречие «very much».",
        ],
        [
            "type" => "content",
            "content" => "Наречие «very much» — «<i>очень</i>» ставится всегда в конце предложения.",
        ],
        [
            "type" => "example",
            "content" => [
                ["I like cakes <b class='color'>very much</b>.", "Я люблю пирожные очень.", "Я очень люблю пирожные."],
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