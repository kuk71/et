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
            "content" => "Слово «only».",
        ],
        [
            "type" => "content",
            "content" => "Если перед словом «only» — «только» стоит определённый артикль «the», то это слово имеет 
                значение «единственный».",
        ],
        [
            "type" => "example",
            "content" => [
                ["the only son", "единственный сын"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Местоимения «anything» и «something» в английских предложениях.",
        ],
        [
            "type" => "content",
            "content" => "Местоимения «something» употребляются в утвердительных предложениях, а «anything» — в 
                вопросительных и отрицательных предложениях.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Mother doesn't want anything.", "Мама не хочет ничего."],
                ["Something is better than nothing.", "Что-то лучше чем ничего"],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];


