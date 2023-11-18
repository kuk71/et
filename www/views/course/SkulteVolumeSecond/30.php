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
            "content" => "Слово «as».",
        ],
        [
            "type" => "content",
            "content" => "Слово «as» в английском языке имеет несколько значений.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Wolves are cowards as you know.","Волки — трусы, как вы знаете.", ""],
                ["Не is working as a lorry-driver.","Он работает шофёром.", ""],
                ["Run here as quickly as you can.","Беги сюда как можно быстрее.", ""],
                ["As she was turning the corner, she heard a cry.","В то время как она поворачивала за угол, она услышала крик.", ""],
                ["We had to hurry as it was very late.","Нам должны были (had to) торопиться, так как было уже очень поздно.", ""],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];
