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
            "content" => "Выражение «хотелось бы» в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "Выражения: «I should like», «he would like», «she would like», «we should like», «you would 
                like», «they would like» + неопределенная форма глагола соответствуют в русском языке выражениям 
                «мне хотелось бы», «ему хотелось бы», «ей хотелось бы» и т. д.",
        ],
        [
            "type" => "example",
            "content" => [
                ["I should like to go to the forest with you.", "Мне хотелось бы пойти в лес с вами."],
                ["Jimmy would like to be an explorer.", "Джимми хотелось бы быть исследователем."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];


