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
            "content" => "Слова «few» и «little».",
        ],
        [
            "type" => "content",
            "content" => "Если перед словами «few» - «мало» и «little» - «мало» стоит неопределённый артикль, то «a few» 
                имеет значение «несколько», a «a little» — «немного».",
        ],
        [
            "type" => "example",
            "content" => [
                ["There were <u>a few</u> roses in the garden.", "В саду было <u>несколько</u> роз."],
                ["There is <u>a little</u> milk in that bottle.", "Есть <u>немного</u> молока в той бутылке."],
            ],
        ]
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];
