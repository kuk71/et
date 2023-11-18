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
            "content" => "Неопределённая форма глагола.",
        ],
        [
            "type" => "content",
            "content" => "Неопределённая форма глагола в английском языке часто соответствует в русском языке 
                придаточному обстоятельственному предложению цели, которое соединяется с главным союзом «чтобы».",
        ],
        [
            "type" => "example",
            "content" => [
                ["We came here to look at your puppy.", "Мы пришли сюда, <u>чтобы посмотреть</u> на вашего щенка."],
                ["She is too young to go to the theatre.", "Она слишком мала, <u>чтобы ходить</u> в театр."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];
