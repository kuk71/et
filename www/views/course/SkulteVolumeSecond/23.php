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
            "content" => "Сокращения в разговорной речи.",
        ],
        [
            "type" => "content",
            "content" => "В разговорной речи часто употребляются сокращения: вспомогательные глаголы сливаются либо с 
                отрицанием, стоящим после них, либо с местоимением, стоящим перед ними.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Не doesn’t (does not) work so much now.","Он теперь так много не работает.", ""],
                ["I don’t (do not) understand this sentence.","Я не понимаю этого предложения.", ""],
                ["I’ll (I shall) tell you this story tomorrow.","Я расскажу вам этот рассказ завтра.", ""],
                ["He’s (he has) never been to Leningrad.","Он никогда не был в Ленинграде.", ""],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "paragraph",
    "content" => [
        [
            "type" => "header",
            "content" => "Глагол «make».",
        ],
        [
            "type" => "content",
            "content" => "Глагол «to make», кроме значение «делать», имеет также значение «заставлять». В этом случае 
                следующий за дополнением глагол в неопределённой форме употребляется без частицы «to».",
        ],
        [
            "type" => "example",
            "content" => [
                ["Не made the dog jump over the fence.", "Он заставлял собаку прыгать через забор."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "paragraph",
    "content" => [
        [
            "type" => "header",
            "content" => "Глагол «turn».",
        ],
        [
            "type" => "content",
            "content" => "Глагол «to turn» в сочетании с прилагательным переводится на русский язык одним словом.
",
        ],
        [
            "type" => "example",
            "content" => [
                ["to turn red", "покраснеть"],
                ["to turn pale", "бледнеть"],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "paragraph",
    "content" => [
        [
            "type" => "header",
            "content" => "Наречие «neither»",
        ],
        [
            "type" => "content",
            "content" => "Наречие «neither» -  «тоже (не)» употребляется при кратких отрицательных ответах; «neither» 
                ставится перед глаголом, а глагол — перед подлежащим.",
        ],
        [
            "type" => "example",
            "content" => [
                ["She won’t go with him. Neither shall I.", "Она не пойдёт с ним. Я тоже (не пойду)."],
                ["They do not speak English. Neither do we.", "Они не говорят по-английски. Мы тоже (не говорим)."],
                ["She is not such a good swimmer. Neither is he.", "Она не такая хорошая пловчиха. Он тоже."],
                ["", ""],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];


