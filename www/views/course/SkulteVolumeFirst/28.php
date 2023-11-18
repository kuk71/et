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
            "content" => "Множественное число слов оканчивающихся на «-y» в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "Слова, оканчивающиеся на букву «-у», перед которой стоит согласная, меняют во множественном 
                числе окончание на «-ies».",
        ],
        [
            "type" => "example",
            "content" => [
                ["fly", "fl<b class='color'>ies</b>", "мухи"],
                ["berry", "berr<b class='color'>ies</b>", "ягоды"],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если существительное оканчивается на букву «-у», перед которой стоит гласная, то во множественном числе прибавляется окончание «-s».",
        ],
        [
            "type" => "example",
            "content" => [
                ["boy", "boy<b class='color'>s</b>", "мальчики"],
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