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
            "content" => "Местоимение «it».",
        ],
        [
            "type" => "content",
            "content" => "Местоимение «it». имеет несколько значений.",
        ],
        [
            "type" => "content",
            "content" => "«It» — личное местоимение «он», «она», «оно» для предметов и животных:",
        ],
        [
            "type" => "example",
            "content" => [
                ["We have a monkey; <u>it</u> is very funny.", "У нас есть обезьянка; <u>она</u> очень забавная."],
                ["Jimmy has a gun; <u>it</u> is not new.", "У Джимми есть ружьё; <u>оно</u> не новое."],
                ["The man killed a lion; <u>it</u> was as big as a cow.", "Человек убил льва; <u>он</u> был большой, как корова."],
            ],
        ],
        [
            "type" => "content",
            "content" => "«It» — безличное:",
        ],
        [
            "type" => "example",
            "content" => [
                ["<u>It</u> is raining. <u>It</u> is cold. <u>It</u> is five o’clock.", "Идёт дождь. Холодно. 5 часов."],
                ["<u>It</u>’s pleasant.", "Приятно."],
            ],
        ],
        [
            "type" => "content",
            "content" => "«It is...» (that, who и т. д.) — усилительное:",
        ],
        [
            "type" => "example",
            "content" => [
                ["<u>It was</u> Jimmy who saw him first.", "Именно Джимми увидел его первым."],
            ],
        ],
        [
            "type" => "header",
            "content" => "Глагол «must».",
        ],
        [
            "type" => "content",
            "content" => "Глагол «must» — «должен» имеет только настоящее время. Во всех остальных временах он 
                заменяется глаголом «»have в нужном времени. Однако русскому выражению «не должен был» (глагол «должен» 
                в прошедшем времени в отрицательной форме) соответствует выражение «should not have» + Past Participle 
                смыслового глагола.",
        ],
        [
            "type" => "example",
            "content" => [
                ["You <u>should not have</u> given her the book without my permission.", "Ты <u>не должен был</u> давать ей книгу без моего разрешения."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];


