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
            "content" => "Предлог «with» в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "Предлог «with» также выполняет роль творительного падежа для неодушевлённых предметов. В этом 
                случае он не переводится.",
        ],
        [
            "type" => "example",
            "content" => [
                ["I like to draw <b class='color'>with</b> coloured pencils.", "Я люблю рисовать <i>цветными</i> карандашами.", ""],
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