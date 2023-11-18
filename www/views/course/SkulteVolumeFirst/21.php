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
            "content" => "Как спросить «Сколько вам лет?» по английски",
        ],
        [
            "type" => "content",
            "content" => "Английское выражение «How old are you?» - «Как стары вы?» переводится на русский как: «Сколько вам лет?»",
        ],
        [
            "type" => "example",
            "content" => [
                ["How old are you? — I am ten (years old).", "Сколько вам лет?— Мне десять (лет).", ""],
                ["How old is he? — He is ten (years old).", "Сколько ему лет?— Ему десять (лет).", ""],
                ["How old is she? — She is ten (years old).", "Сколько ей лет?— Ей десять (лет).", ""],
                ["How old is it? — It is ten (years old).", "Сколько ему лет?— Ему десять (лет).", ""],],
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