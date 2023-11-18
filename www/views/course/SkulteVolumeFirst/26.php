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
            "content" => "Местоимение «some»",
        ],
        [
            "type" => "content",
            "content" => "Местоимение «some» может иметь два значения:",
        ],
        [
            "type" => "content",
            "content" => "1) «<i>Несколько</i>», употребляется перед исчисляемыми существительными во множественном числе (бутылки, яблоки, машины и т.п.).",
        ],
        [
            "type" => "content",
            "content" => "2) «<i>Некоторое количество</i>», употребляется перед неисчисляемыми существительными (молоко, вода, песок). В этом случае оно не переводится на русский язык.",
        ],
        [
            "type" => "example",
            "content" => [
                ["We have some apples.", "У нас есть <i>несколько</i> яблок.", "Мы имеем несколько яблок"],
                ["We have some boiled water.", "У нас есть кипячёная вода.", "Мы имеем кипячёную воду"],
            ],
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