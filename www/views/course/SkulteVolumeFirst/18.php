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
            "content" => "Притяжательный падеж в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "Притяжательный падеж употребляется с одушевлёнными существительными указывая на принадлежность 
                и отвечает на вопросы: «<i>чей, чья, чьё, чьи?</i>».",
        ],
        [
            "type" => "content",
            "content" => "Притяжательный падеж имён существительных образуется при помощи «'s», которое ставится после 
                существительного.».",
        ],
        [
            "type" => "example",
            "content" => [
                ["My mother<b class='color'>’s</b> books", "Книги моей мамы", "Моей мамы книги"],
                ["My father<b class='color'>’s</b> gun", "Ружьё моего папы", "Моего папы ружьё"],
                ["Jim<b class='color'>’s</b> little cat", "Маленькая кошка Джима.", "Джимина маленькая кошка"],
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