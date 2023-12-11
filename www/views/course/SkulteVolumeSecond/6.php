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
            "content" => "Местоимение «any».",
        ],
        [
            "type" => "content",
            "content" => "Если местоимение «any» стоит в утвердительном предложении, то оно имеет значение «любой», 
                «какой-нибудь».",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["Give me any book, don’t try to find the old one.", "Дай мне любую книгу, не пытайся искать ту старую.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Местоимение «one».",
        ],
        [
            "type" => "content",
            "content" => "Чтобы не повторять два раза одно и то же существительное, его заменяют местоимением «one» 
                (мн. число «ones»).",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["Give me my old hat and take my new one.", "Дай мне мою старую шляпу и возьми мою новую (шляпу).", ""],
                ["Don’t eat green pears, eat yellow ones.", "He ешь зелёные груши, ешь жёлтые (груши).", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Наречия.",
        ],
        [
            "type" => "content",
            "content" => "Многие наречия (отвечают на вопрос «как?») образуются от прилагательных (отвечают на вопрос 
                «какой?») при помощи суффикса «-lу».",
        ],
        [
            "type" => "example",
            "content" => [
                ["loud / loudly", "громкий / громко", ""],
                ["cross / crossly", "сердитый / сердито", ""],
                ["warm / warmly", "тёплый / тепло", ""],
                ["angry / angrily", "сердитый / сердито", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Обратите внимание на то, что конечное «y» у прилагательного переходит при этом в «i».",
        ],
        [
            "type" => "header",
            "content" => "Личное местоимение «it».",
        ],
        [
            "type" => "content",
            "content" => "Личное местоимение «it» заменяет существительные, обозначающие животных в том случае, если мы 
                не интересуемся полом животного.",
        ],
        [
            "type" => "example",
            "content" => [
                ["I have a dog. It	is very	clever.", "У меня есть собака. Она очень умная.", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если же собаке (или любому другому животному) дано имя, то в этом случае употребляются 
                местоимения «he» или «she» в зависимости от того, мужское это имя или женское.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Rex is a good dog. Не is clever.", "Рекс - хороший пёс. Он умный.", ""],
                ["Pussy is a little kitten. She is very funny.", "Пусси - маленький котёнок. Она очень смешная.", ""],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofonAll",
];

$lessonParts[] = [
    "type" => "speakingAll",
];
