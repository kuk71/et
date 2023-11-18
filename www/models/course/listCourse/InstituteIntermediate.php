<?php

namespace app\models\course\listCourse;

use app\models\course\LL;


/**
 * Модель для хранения данных об уроках по курсу Скульте
 *
 */
class InstituteIntermediate extends LL
{
    protected static function fillLessonsContent()
    {
        self::$lessonsContent = [
//            [
//                'file' => "0",
//                'description' => 'Как учить английский язык?',
//            ],
            [
                'file' => "1",
                'description' => 'Безмятежная жизнь. День для посещения театра. Пикник. A quiet life. A date for the theatre. A picnic.',
                'lingofon_lesson_id' => [464, 465, 466],
            ],
            [
                'file' => "2",
                'description' => 'Безмятежная жизнь. День для посещения театра. Пикник. A quiet life. A date for the theatre. A picnic.',
                'lingofon_lesson_id' => [467, 468, 469],
            ],
            [
                'file' => "3",
                'description' => 'Дорожное происшествие. Маленькая сплетня. Несколько поручений. A road accident. A little gossip. A few errands.',
                'lingofon_lesson_id' => [470, 471, 472],
            ],
            [
                'file' => "4",
                'description' => "Работа и игра. Виды на будущее. После экзаменов. Work and play. Career prospects. After the exams/",
                'lingofon_lesson_id' => [473,474,475],
            ],
            [
                'file' => "5",
                'description' => "Неофициальное приглашение. Подробные указания. Обустройство дома. An informal invitation. Detailed directions. Arranging the house.",
                'lingofon_lesson_id' => [476, 477, 478],
            ],
            [
                'file' => "6",
                'description' => "Размышления субботним вечером. Гонорар специалисту. Подозреваемый. Saturday night thoughts. The expert's fee. The suspect.",
                'lingofon_lesson_id' => [479, 480, 481],
            ],
            [
                'file' => "7",
                'description' => "Выборы в Соединенном Королевстве. Повезло. Морем или самолетом. U.K. elections. In luck. Sea or air.",
                'lingofon_lesson_id' => [482, 483, 484],
            ],
            [
                'file' => "8",
                'description' => "Дело привычки. Полезный сосед. Пассажир с сезонным билетом. A matter of habit. A helpful neighbor. The commuter.",
                'lingofon_lesson_id' => [485, 486, 487],
            ],
        ];
    }

    protected static function fillLessonsName()
    {
        self::$lessonsName = [
//            [
//                'url' => 'introductory_english_lesson',
//                'nameEn' => 'Introductory',
//                'nameRu' => ['Вводный', 'вводного', 'вводному'],
//            ],
            [
                'url' => 'first_english_lesson',
                'nameEn' => 'First',
                'nameRu' => ['Первый', 'первого', 'первому'],
            ],
            [
                'url' => 'second_english_lesson',
                'nameEn' => 'Second',
                'nameRu' => ['Второй', 'второго', 'второму'],
            ],
            [
                'url' => 'third_english_lesson',
                'nameEn' => 'Third',
                'nameRu' => ['Третий', 'третьего', 'третьему'],
            ],
            [
                'url' => 'fourth_english_lesson',
                'nameEn' => 'Fourth',
                'nameRu' => ['Четвёртый', 'четвёртого', 'четвертому'],
            ],
            [
                'url' => 'fifth_english_lesson',
                'nameEn' => 'Fifth',
                'nameRu' => ['Пятый', 'пятого', 'пятому'],
            ],
            [
                'url' => 'sixth_english_lesson',
                'nameEn' => 'Sixth',
                'nameRu' => ['Шестой', 'шестого', 'шестому'],
            ],
            [
                'url' => 'seventh_english_lesson',
                'nameEn' => 'Seventh',
                'nameRu' => ['Седьмой', 'седьмого', 'седьмому'],
            ],
            [
                'url' => 'eighth_english_lesson',
                'nameEn' => 'Eighth',
                'nameRu' => ['Восьмой', 'восьмого', 'восьмому'],
            ],
//            [
//                'url' => 'ninth_english_lesson',
//                'nameEn' => 'Ninth',
//                'nameRu' => ['Девятый', 'девятого', 'девятому'],
//            ],
//            [
//                'url' => 'tenth_english_lesson',
//                'nameEn' => 'Tenth',
//                'nameRu' => ['Десятый', 'десятого', 'десятому'],
//            ],
//            [
//                'url' => 'eleventh_english_lesson',
//                'nameEn' => 'Eleventh',
//                'nameRu' => ['Одиннадцатый', 'одиннадцатого', 'одиннадцатому'],
//            ],
//            [
//                'url' => 'twelfth_english_lesson',
//                'nameEn' => 'Twelfth',
//                'nameRu' => ['Двенадцатый', 'двенадцатого', 'двенадцатому'],
//            ],
//            [
//                'url' => 'thirteenth_english_lesson',
//                'nameEn' => 'Thirteenth',
//                'nameRu' => ['Тринадцатый', 'тринадцатого', 'тринадцатому'],
//            ],
//            [
//                'url' => 'fourteenth_english_lesson',
//                'nameEn' => 'Fourteenth',
//                'nameRu' => ['Четырнадцатый', 'четырнадцатого', 'четырнадцатому'],
//            ],
//            [
//                'url' => 'fifteenth_english_lesson',
//                'nameEn' => 'Fifteenth',
//                'nameRu' => ['Пятнадцатый', 'пятнадцатого', 'пятнадцатому'],
//            ],
//            [
//                'url' => 'sixteenth_english_lesson',
//                'nameEn' => 'Sixteenth',
//                'nameRu' => ['Шестнадцатый', 'шестнадцатого', 'шестнадцатому'],
//            ],
//            [
//                'url' => 'seventeenth_english_lesson',
//                'nameEn' => 'Seventeenth',
//                'nameRu' => ['Семнадцатый', 'семнадцатого', 'семнадцатому'],
//            ],
//            [
//                'url' => 'eighteenth_english_lesson',
//                'nameEn' => 'Eighteenth',
//                'nameRu' => ['Восемнадцатый', 'восемнадцатого', 'восемнадцатому'],
//            ],
//            [
//                'url' => 'nineteenth_english_lesson',
//                'nameEn' => 'Nineteenth',
//                'nameRu' => ['Девятнадцатый', 'девятнадцатого', 'девятнадцатому'],
//            ],
//            [
//                'url' => 'twentieth_english_lesson',
//                'nameEn' => 'Twentieth',
//                'nameRu' => ['Двадцатый', 'двадцатого', 'двадцатому'],
//            ],
//            [
//                'url' => 'twenty-first_english_lesson',
//                'nameEn' => 'Twenty-first',
//                'nameRu' => ['Двадцать первый', 'двадцать первого', 'двадцать первому'],
//            ],
//            [
//                'url' => 'twenty-second_english_lesson',
//                'nameEn' => 'Twenty-second',
//                'nameRu' => ['Двадцать второй', 'двадцать второго', 'двадцать второму'],
//            ],
//            [
//                'url' => 'twenty-third_english_lesson',
//                'nameEn' => 'Twenty-third',
//                'nameRu' => ['Двадцать третий', 'двадцать третьего', 'двадцать третьему'],
//            ],
//            [
//                'url' => 'twenty-fourth_english_lesson',
//                'nameEn' => 'Twenty-fourth',
//                'nameRu' => ['Двадцать четвертый', 'двадцать четвертого', 'двадцать четвертому'],
//            ],
//            [
//                'url' => 'twenty-fifth_english_lesson',
//                'nameEn' => 'Twenty-fifth',
//                'nameRu' => ['Двадцать пятый', 'двадцать пятого', 'двадцать пятому'],
//            ],
//            [
//                'url' => 'twenty-sixth_english_lesson',
//                'nameEn' => 'Twenty-sixth',
//                'nameRu' => ['Двадцать шестой', 'двадцать шестого', 'двадцать шестому'],
//            ],
//            [
//                'url' => 'twenty-seventh_english_lesson',
//                'nameEn' => 'Twenty-seventh',
//                'nameRu' => ['Двадцать седьмой', 'двадцать седьмого', 'двадцать седьмому'],
//            ],
//            [
//                'url' => 'twenty-eighth_english_lesson',
//                'nameEn' => 'Twenty-eighth',
//                'nameRu' => ['Двадцать восьмой', 'двадцать восьмого', 'двадцать восьмому'],
//            ],
//            [
//                'url' => 'twenty-ninth_english_lesson',
//                'nameEn' => 'Twenty-ninth',
//                'nameRu' => ['Двадцать девятый', 'двадцать девятого', 'двадцать девятому'],
//            ],
//            [
//                'url' => 'thirtieth_english_lesson',
//                'nameEn' => 'Thirtieth',
//                'nameRu' => ['Тридцатый', 'тридцатого', 'тридцатому'],
//            ],
        ];
    }
}