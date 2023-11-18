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
            "content" => "Частица «ли».",
        ],
        [
            "type" => "content",
            "content" => "Частице «ли» в предложениях типа «Не знаете ли вы, придёт мистер Дэйл сегодня?», «Он спросил 
                Полю, не слышала ли она об этой истории», соответствует в английском языке союз «whether».",
        ],
        [
            "type" => "content",
            "content" => "Союз «whether» соединяет главное предложение с придаточным. В придаточном предложении, 
                начинающемся союзом «whether», всегда будет прямой порядок слов, т. е. на первом месте будет стоять 
                подлежащее, а за ним сказуемое.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Do you happen to know whether Mr. Dale will come today?", "Вы случайно не знаете, приедет ли мистер Дейл сегодня?"],
                ["He asked Polly whether she had heard the story.", "Он спросил Полли, слышала ли она эту историю."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];


