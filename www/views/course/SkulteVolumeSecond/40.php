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
            "content" => "Выражение «as usual».",
        ],
        [
            "type" => "content",
            "content" => "Выражение «as usual» — как обычно ставится в конце предложения.",
        ],
        [
            "type" => "example",
            "content" => [
                ["That morning he drank his coffee <u>as usual</u>.", "В то утро он, <u>как обычно</u>, выпил своё кофе."],
            ],
        ],
        [
            "type" => "header",
            "content" => "Артикли.",
        ],
        [
            "type" => "content",
            "content" => "Если за существительным следует количественное числительное, то артикль перед этим 
                существительным не употребляется.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Open your books at page twenty-nine!", "Откройте книги на странице двадцать девять."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];

