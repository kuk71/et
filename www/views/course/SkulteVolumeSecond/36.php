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
            "content" => "Условные предложения нереального условия.",
        ],
        [
            "type" => "content",
            "content" => "В английском языке есть так называемые условные предложения нереального условия, которым в 
                русском языке соответствуют предложения в сослагательном наклонении (глагол в прошедшем времени + 
                частица «бы» — «сделал бы», «пришёл бы» и т. д.).
",
        ],
        [
            "type" => "example",
            "content" => [
                ["If he had come in time, we should have gone to the cinema.", "Если бы он пришёл вовремя, мы пошли бы в кино."],
            ],
        ],
        [
            "type" => "content",
            "content" => "В главном предложении таких условных предложений употребляется Future Perfect Tense in the Past 
                (будущее совершённое время в прошедшем). В придаточном предложении, которое всегда начинается с союза 
                «if», употребляется Past Perfect Tense (прошедшее совершённое время).",
        ],
        [
            "type" => "example",
            "content" => [
                ["Не would have returned the book to you if you had come to school.", "Он вернул бы вам книгу, если бы вы пришли в школу."],
                ["We should have come to the meeting if we had known about it.", "Мы пришли бы на собрание, если бы мы знали о нём."],
            ],
        ],
        [
            "type" => "content",
            "content" => "В данном уроке встречается предложение («If he had not left his spectacles at home, that girl 
                of his would have been burnt alive by now»), в котором Future Perfect Tense in the Past (будущее 
                совершённое время в прошедшем) употреблено в страдательном залоге — «would have been burnt». Всё это 
                предложение переводится на русский язык следующим образом: «Если бы он не оставил свои очки дома, его 
                девочка к этому времени уже сгорела бы заживо» (дословно: «была бы сожжена заживо»).",
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];

