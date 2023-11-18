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
            "content" => "Как узнать имя?",
        ],
        [
            "type" => "content",
            "content" => "По-русски говорят: «Как вас зовут?» или «Как ваше имя?», по-английски говорят: «<i>What Is 
                your name?</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["What is this girl’s name?","Как зовут эту девочку?", "Какое этой девочки имя?"],
                ["What is his name?","Как его имя?", "Какое его имя?"],
                ["What is your friend’s name?","Как зовут твоего друга?", "Какое вашего друга имя?"],
            ],
        ],
        [
            "type" => "content",
            "content" => "Отвечать надо: «My name is ...» «Меня зовут ...». ",
        ],
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
