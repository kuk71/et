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
            "content" => "Множественное число.",
        ],
        [
            "type" => "content",
            "content" => "Если слово оканчивается на «-o», «-b», «-x», «-z», «-ch», «-sh», то к нему во множественном 
                числе прибавляется «-es».
"
        ],
        [
            "type" => "example",
            "content" => [
                ["a bo<b class='color'>x</b>", "box<b class='color'>es</b>", ""],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
];

$lessonParts[] = [
    "type" => "speaking",
];