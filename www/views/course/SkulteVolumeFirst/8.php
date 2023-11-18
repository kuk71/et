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
            "content" => "Особенности глагола «have».",
        ],
        [
            "type" => "content",
            "content" => "Глагол «have» - «иметь» может быть в двух формах: «have» и «has». Форма «has» используется, когда глагол связан с местоимениями «он», «она», «оно» или с любым существительным, которое может быть заменено местоимением «он», «она», «оно». Во всех остальных случаях используется форма «have».",
        ],
        [
            "type" => "example",
            "content" => [
                ["I have a book.", "У меня есть книга.", "Я имею книгу"],
                ["They have a book.", "У них есть книга.", ""],
                ["He <b class='color'>has</b> a book.", "У него есть книга.", "Он имеет книгу"],
                ["She <b class='color'>has</b> a book.", "У нее есть книга.", "Она имеет книгу"],
                ["It <b class='color'>has</b> a book.", "У него есть книга.", "Оно имеет книгу"],
                ["Boy has a book.", "У мальчика есть книга.", "«Мальчик имеет книгу» – в этом предложении существительное «мальчик» может быть заменено на местоимение «он»"],
            ],
        ],
        [
            "type" => "content",
            "content" => "<b>Существительное</b> – это слово, которое отвечает на вопрос «кто?» или «что?».",
        ],
        [
            "type" => "content",
            "content" => "<b>Местоимение</b> — это слово, которое указывает на предметы, их признаки и количество, при 
                            этом не называет их конкретно. Местоимения отвечают на вопросы: «кто?», «что?», «какой?», 
                            «сколько?».",
        ],
        [
            "type" => "example",
            "content" => [
                ["кто?", "я, он, ты, кто-то, она, оно", ""],
                ["что?", "что-то, что-либо, кое-что", ""],
                ["какой?", "любой, иной, какой-то", ""],
                ["сколько?", "столько", ""],
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