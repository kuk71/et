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
            "content" => "Сокращения в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "В разговорной английской речи приняты следующие сокращения:",
        ],
        [
            "type" => "content",
            "content" => "
                I have = I’ve<br>
                I am =	I’m<br>
                he has = he’s<br>
                he is =	he’s<br>
                I shall = I’ll<br>
                we are	= we’re<br>
                he will = he’ll<br>
                cannot = can’t<br>
                must not = mustn’t<br>
                will not = won’t<br>
                I have = I've got<br>
                he has = he's got<br>
                Let us = Let’s",
        ],
        [
            "type" => "header",
            "content" => "Настоящее неопределённое время (Present Indefinite Tense).",
        ],
        [
            "type" => "content",
            "content" => "Present Indefinite Tense употребляется для обозначения действия, которое происходит обычно или постоянно в настоящем времени.",
        ],
        [
            "type" => "content",
            "content" => "Present Indefinite Tense образуется из глагола в неопределённой форме без частицы «to». В 3-м лице ед. ч. («he», «she», «it») глаголы в Present Indefinite Tense имеют окончание «-s».",
        ],
        [
            "type" => "example",
            "content" => [
                ["I speak", "Я говорю"],
                ["You speak", "Ты говоришь"],
                ["Не speak<b class='color'>s</b>", "Он говорит"],
                ["She speak<b class='color'>s</b>", "Она говорит"],
                ["It speak<b class='color'>s</b>", "Оно говорит (что-то не одушевленное например «радио»)"],
                ["We speak", "Мы говорим"],
                ["You speak", "Вы говорите"],
                ["They speak", "Они говорят"],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если глагол оканчивается на «-о», «-ss», «-sh», «-ch», то в 3-м лице ед. ч. («he», «she», «it») у глаголов прибавляется окончание «-es».",
        ],
        [
            "type" => "example",
            "content" => [
                ["I go", "Я иду"],
                ["You go", "Ты идешь"],
                ["He go<b class='color'>es</b>", "Он идёт"],
                ["She go<b class='color'>es</b>", "Она идёт"],
                ["It go<b class='color'>es</b>", "Он идёт (что-то не одушевленное например «поезд»)"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Личные местоимения.",
        ],
        [
            "type" => "content",
            "content" => "В английском языке личные местоимения имеют только 2 падежа: именительный и объектный. Английский объектный падеж заменяет 4 русских падежа: винительный, дательный, творительный и предложный.",
        ],
        [
            "type" => "content",
            "content" => "
                    <em>Единственное число.</em><br>
                    <u>Именительный падеж личных местоимений.</u>",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["I", "я"],
                ["you", "ты, вы"],
                ["he", "он"],
                ["she", "она"],
                ["it", "оно, он, она (для вещей и животных)"],
            ],
        ],
        [
            "type" => "content",
            "content" => "<u>Объектный падеж личных местоимений.</u>",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["me", "меня, мне"],
                ["you", "тебя, тебе; вас, вам"],
                ["him", "его, ему"],
                ["her", "её, ей"],
                ["it", "его, её, ему (для вещей и животных)"],
            ],
        ],
        [
            "type" => "content",
            "content" => "
                    <em>Множественное число.</em><br>
                    <u>Именительный падеж.</u>",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["we", "мы"],
                ["you", "вы"],
                ["they", "они"],
            ],
        ],
        [
            "type" => "content",
            "content" => "<u>Объектный падеж.</u>",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["us", "нас, нам"],
                ["you", "вас, вам"],
                ["them", "их, им"],
            ],
        ],
        [
            "type" => "example",
            "content" => [
                ["Give mе a book.", "Дай мне книгу.", ""],
                ["Give him a book.", "Дай ему книгу.", ""],
                ["Give her a book.", "Дай ей книгу.", ""],
                ["Give us books.", "Дай нам книги.", ""],
                ["Give them books.", "Дай им книги.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Предлог «в» для игр.",
        ],
        [
            "type" => "content",
            "content" => "По-русски говорят: «играть в игры»; по-английски предлог «в» опускается.",
        ],
        [
            "type" => "example",
            "content" => [
                ["I play volley-ball.","Я играю в волейбол.", ""],
                ["Не plays football.","Он играет в футбол.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Предлог «up».",
        ],
        [
            "type" => "content",
            "content" => "Предлог «up» означает движение вверх.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Stand up!","Встань!", ""],
                ["Jump up!","Подпрыгни!", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Предлог «with».",
        ],
        [
            "type" => "content",
            "content" => "Английское имя существительное с предлогом «with» соответствует в русском языке имени существительному в творительном падеже.",
        ],
        [
            "type" => "example",
            "content" => [
                ["with a ball", "мячом", ""],
                ["with her left foot", "левой ногой", ""],
                ["with a knife", "ножом", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Притяжательные местоимения.",
        ],
        [
            "type" => "content",
            "content" => "В английском языке перед существительными, обозначающими название частей тела или одежды, почти всегда ставится притяжательное местоимение, которое на русский язык часто не переводится.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Не kicks the ball with <b class='color'>his</b> left foot.", "Он бьёт мяч левой ногой.", ""],
                ["Не puts on <b class='color'>his</b> coat.", "Он надевает пальто.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Дни недели и месяцы.",
        ],
        [
            "type" => "content",
            "content" => "Названия дней и месяцев всегда пишутся с большой буквы.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Sunday", "воскресенье", ""],
                ["Monday", "понедельник", ""],
                ["January", "январь", ""],
            ],
        ]
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
    "type" => "lingofon",
    "num" => 3,
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 4,
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 5,
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 6,
];

$lessonParts[] = [
    "type" => "speaking",
    "num" => 1,
];

$lessonParts[] = [
    "type" => "speaking",
    "num" => 2,
];

$lessonParts[] = [
    "type" => "speaking",
    "num" => 3,
];

$lessonParts[] = [
    "type" => "speaking",
    "num" => 4,
];

$lessonParts[] = [
    "type" => "speaking",
    "num" => 5,
];

// «»
// <u></u>
// <b class='color'></b>





