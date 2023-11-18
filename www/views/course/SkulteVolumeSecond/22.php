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
            "content" => "При образовании множественного числа от имён существительных, оканчивающихся на «-f» или «-fe», 
                конечная буква «f» меняется на «v» и прибавляется окончание «-es».",
        ],
        [
            "type" => "example",
            "content" => [
                ["leaf / leaves", "лист / листья"],
                ["knife / knives", "нож / ножи"],
            ],
        ],

        [
            "type" => "content",
            "content" => "<b>Исключения</b>:",
        ],
        [
            "type" => "example",
            "content" => [
                ["roof / roofs", "крыша / крыши"],
                ["knife / knives", "носовой платок / носовые платки"],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];


