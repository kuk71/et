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
            "content" => "Глагол «be» в английских предложениях.",
        ],
        [
            "type" => "content",
            "content" => "Английский глагол «be» в переводе на русский может иметь следующие значения: «быть», «являться», «находиться». У глагола «be» есть три формы: «am», «is», «are» - все три формы имеют одинаковый перевод на русский, такой же, как и сам глагол «be»: «быть», «являться», «находиться».",
        ],
        [
            "type" => "content",
            "content" => "Форма «am» используется с местоимением «I» (я); форма «is» с местоимениями «he» (он), «she» (она), «it» (он, она, оно – относящиеся не к людям (стол, лев и т.д.)); форма «are» с местоимениями «we» (мы), «you» (вы), «they» (они). К этому нужно просто привыкнуть.",
        ],
        [
            "type" => "example",
            "content" => [
                ["I am a human.", "Я человек.", "Я являюсь человеком"],
                ["He is a human.", "Он человек.", ""],
                ["She is a human.", "Она человек.", ""],
                ["It is a squirrel.", "Это белка.", "Она является белкой"],
                ["We are people.", "Мы люди.", ""],
                ["You are a human.", "Вы человек.", ""],
                ["They are people.", "Они люди.", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "На русский язык этот глагол не переводится.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Не is a boy.", "Он мальчик.",],
                ["She is a girl.", "Она девочка.",],
                ["I am in the garden.", "Я в саду.",],
            ],
        ],
        [
            "type" => "content",
            "content" => "При вопросе «am», «is», «are» ставятся на 1-е место, т. е. перед подлежащим.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Are you in the room?", "Вы в комнате?",],
                ["Is the girl in the garden?", "Девочка в саду?",],
            ],
        ],
        [
            "type" => "content",
            "content" => "При отрицании после «am», «is», «are» ставится «not».",
        ],
        [
            "type" => "example",
            "content" => [
                ["My dog is not black.", "Моя собака не чёрная.",],
                ["You are not in the room.", "Вы не в комнате.", "Вы находитесь не в комнате"],
                ["I am not in the garden.", "Я не в саду.", "Я нахожусь не в саду"],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если предложение начинается с вопросительного слова, то оно ставится перед «am», «is», «are».",
        ],
        [
            "type" => "example",
            "content" => [
                ["Where is my book?", "Где моя книга?",],
                ["Where are you?", "Где вы?"],
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
