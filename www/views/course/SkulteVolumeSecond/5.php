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
            "content" => "Формы предложений в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "В английском языке имеется 4 формы предложений:",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["", "a) утвердительная", ""],
                ["", "b) вопросительная", ""],
                ["", "c) отрицательная", ""],
                ["", "d) отрицательно-вопросительная", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Они строятся по определённому образцу, где каждый член предложения занимает своё определённое место.",
        ],
        [
            "type" => "content",
            "content" => "<u>Утвердительные предложения</u> в настоящем неопределённом времени имеют следующий порядок слов: подлежащие, сказуемое, дополнение, обстоятельство.",
        ],
        [
            "type" => "example",
            "content" => [
                ["", "<b>The boy</b> [подлежащие] <b>reads</b> [сказуемое] <b>a book</b> [дополнение] <b>to Lily</b> [дополнение] <b>in the garden</b> [обстоятельство].", "Мальчик читает Лили книгу в саду",],
                ["", "<b>My mother</b> [подлежащие] <b>gives</b> [сказуемое] <b>me</b> [дополнение] <b>a nice apple</b> [дополнение].", "Моя мама даёт мне вкусное яблоко."],
            ],
        ],
        [
            "type" => "content",
            "content" => "<u>При образовании вопросительных предложений</u> в настоящем неопределённом времени порядок 
                        слов остаётся таким же, как и в утвердительном предложении (подлежащее, сказуемое, дополнение, 
                        обстоятельство), но перед подлежащим ставится вспомогательный глагол «to do». В 3-м лице ед. ч. 
                        (для «she», «he», «it») этот глагол имеет форму «does», а смысловой глагол теряет своё 
                        окончание «-s».",
        ],
        [
            "type" => "content",
            "content" => "Если в предложении есть вопросительное слово, то оно ставится перед вспомогательным глаголом.",
        ],
        [
            "type" => "example",
            "content" => [
                ["", "<b>Does</b> [вспомогательный глагол] <b>the boy</b> [подлежащие] <b>take</b> [сказуемое] <b>his sister</b> [дополнение] <b>to the Zoo?</b> [обстоятельство].", "Мальчик берёт свою сестру в зоопарк",],
                ["", "<b>Where</b> [вопросительное слово] <b>does</b> [вспомогательный глагол] <b>the boy</b> [подлежащие] <b>take</b> [сказуемое] <b>his sister</b> [дополнение]?.", "Куда мальчик берёт свою сестру?"],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если вопросительное предложение начинается с вопросительного слова, то ответ на него должен 
                    быть полным.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Where does the boy take his sister?", "The boy takes his sister to the Zoo.", "Куда мальчик берёт свою сестру? Мальчик берет свою сестру в зоопарк."],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если вопросительное предложение начинается с вспомогательного глагола «do», «does», то ответ 
                на него будет кратким: «да» или «нет».",
        ],
        [
            "type" => "example",
            "content" => [
                ["Do you like to read books?", "Yes, I do. No, I do not.", "Ты любишь читать книги? Да. Нет"],
                ["Does your sister go to school?", "Yes, she does. No, she does not.", "Твоя сестра ходит в школу? Да. Нет"],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если вопросительное слово само является подлежащим, то всё предложение строится так, как и утвердительное, а вопросительное слово или группа слов ставится на место подлежащего.",
        ],
        [
            "type" => "example",
            "content" => [
                ["", "<b>Who</b> [подлежащие] <b>takes</b> [сказуемое] <b>Lily</b> [дополнение] <b>to the Zoo?</b> [обстоятельство].", "Кто берёт Лили в зоопарк?",],
            ],
        ],
        [
            "type" => "content",
            "content" => "Ответы на такие вопросы обычно состоят из подлежащего и вспомогательного глагола.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Who reads a book? Jim does.", "Кто читает книгу? Джим [делает / читает].",],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если сказуемым в предложении являются <u>глаголы «to be», «to have», «can», «may», «must»</u>, 
                    то при построении вопросительного предложения вспомогательный глагол не употребляется, а сами эти 
                    глаголы ставятся на первое место, перед подлежащим.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Can you read English? Yes, I can. No, I cannot.", "Умеешь ты читать по-английски? Да, я умею. Нет, я не умею.",],
                ["Must you go to school? Yes, I must. No, I must not.", "Должен ты ходить в школу? Да, я должен. Нет, я не должен.",],
                ["Where is your book? My book is on the sofa.", "Где твоя книга? Моя книга на диване.",],
                ["What has Lily in her hands? Lily has a doll in her hands.", "Что у лили в [её] руке? Лили имеет куклу в [своей] руке.", "В Лилиной руке кукла"],
            ],
        ],
        [
            "type" => "content",
            "content" => "При образовании <u>отрицательных предложений</u> в настоящем неопределённом времени после подлежащего 
                    ставится отрицание «do not» . В 3-м лице ед. ч. (для «she», «he», «it») отрицание имеет форму 
                    «does not».",
        ],
        [
            "type" => "example",
            "content" => [
                ["", "<b>The boy</b> [подлежащие] <b>does not read</b> [сказуемое] <b>a book</b> [дополнение] <b>in the garden.</b> [обстоятельство].", "Мальчик не читает книгу в саду.",],
                ["", "<b>I</b> [подлежащие] <b>do not go</b> [сказуемое] <b>to school.</b> [обстоятельство].", "Я не хожу в школу.",],
            ],
        ],
        [
            "type" => "content",
            "content" => "В случае, если сказуемым являются глаголы «to be», «to have», «can», «may», «must», то 
                    вспомогательный глагол не употребляется, а после этих глаголов ставится отрицание «not».",
        ],
        [
            "type" => "example",
            "content" => [
                ["You must not go to bed late.", "Ты не должен ложиться спать поздно.", "",],
                ["Lily must not pick roses in the garden.", "Лили не должна срывать розы в саду.", "",],
                ["She is not at home now.", "Она не дома сейчас", "Сейчас ее нет дома.",],
                ["Не cannot read French.", "Он не умеет читать по-французски", "Отрицание с глаголом «can» пишется слитно",],
            ],
        ],
        [
            "type" => "content",
            "content" => "После глагола «to have» употребляется отрицание «no».",
        ],
        [
            "type" => "example",
            "content" => [
                ["I have no English books.", "У меня нет книг по английскому.", "",],
                ["Jimmy has no gun.", "У Джима нет ружья.", "",],
            ],
        ],
        [
            "type" => "content",
            "content" => "<u>Вопросительно-отрицательная форма</u>. Она строится так же, как и вопросительная, только 
                    перед смысловым глаголом ставится отрицание «not» или перед подлежащим — «don’t» или «doesn’t» 
                    (сокращённая форма от «do not», «does not»), а за подлежащим следует смысловой глагол.",
        ],
        [
            "type" => "example",
            "content" => [
                ["", "<b>Why</b> [вопросительное слово] <b>does</b> [вспомогательный глагол] <b>he</b> [подлежащие] <b>not read</b> [сказуемое] <b>a book</b> [дополнение] <b>in the garden</b> [обстоятельство]?.", "Почему он не читает книгу в саду?"],
                ["", "<b>Why</b> [вопросительное слово] <b>doesn’t</b> [вспомогательный глагол] <b>he</b> [подлежащие] <b>read</b> [сказуемое] <b>a book</b> [дополнение] <b>in the garden</b> [обстоятельство]?.", "Почему он не читает книгу в саду?"],
            ],
        ],
        [
            "type" => "content",
            "content" => "Глаголы «to be», «to have», «can», «may», «must» сами принимают отрицание и ставятся перед 
                        подлежащим.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Can’t [Cannot] he read well?", "Не умеет он читать хорошо?", "Он не умеет хорошо читать?"],
                ["Isn’t [Is not] he at home now?", "Он не дома сейчас?"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Безличные предложения.",
        ],
        [
            "type" => "content",
            "content" => "Русским безличным предложениям типа «Холодно». «Жарко», «Трудно» и т. д. соответствуют 
                английские предложения типа:",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["It is cold.", "Холодно.", ""],
                ["It is warm.", "Тепло.", ""],
                ["It is difficult.", "Трудно.", ""],
                ["It is two o’clock.", "Два часа.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Придаточные предложения.",
        ],
        [
            "type" => "content",
            "content" => "В придаточных предложениях времени и условия будущее время не употребляется, а заменяется 
                    настоящим временем.",
        ],
        [
            "type" => "example",
            "content" => [
                ["If you come early, we shall go to the cinema.", "Если вы придёте рано, мы пойдём в кино.", ""],
                ["I shall visit you when my mother comes back.", "Я навещу вас, когда моя мама вернётся.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Деепричастие.",
        ],
        [
            "type" => "content",
            "content" => "Русскому деепричастию в английском языке соответствует причастие, которое образуется из 
                    глагола в неопределённой форме без частицы «to» + окончание «-ing».
",
        ],
        [
            "type" => "example",
            "content" => [
                ["to read / reading", "читать / читающий", ""],
                ["to look / looking", "смотреть / смотрящий", ""],
                ["to speak / speaking", "говорить / говорящий", ""],
                ["Granny rocking sings a song.", "Бабушка, качая (качающая), поёт песенку.", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если глагол оканчивается на «-е», то перед окончанием «-ing» «-е» опускается.",
        ],
        [
            "type" => "example",
            "content" => [
                ["to write / writing ", "писать / пишущий", ""],
                ["to live / living", "жить / живущий", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Сказуемое перед подлежащим.",
        ],
        [
            "type" => "content",
            "content" => "Если подлежащее стоит после сказуемого, то перед сказуемым обычно ставится «there».",
        ],
        [
            "type" => "example",
            "content" => [
                ["There walks a fox.", "Там гуляет лиса.", ""],
                ["Once there lived a boy.", "Однажды там жил мальчик.", ""],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];