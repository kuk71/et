<?php

namespace app\models\course\listCourse;

use app\models\course\LL;


/**
 * Модель для хранения данных об уроках по курсу Скульте
 *
 */
class InstituteBeginner extends LL
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
                'description' => 'Аэропорт. The airport.',
                'lingofon_lesson_id' => [434],
            ],
            [
                'file' => "2",
                'description' => 'Гостиница Бирдсли. The Beardsley hotel.',
                'lingofon_lesson_id' => [435],
            ],
            [
                'file' => "3",
                'description' => 'Наши номера. Our rooms.',
                'lingofon_lesson_id' => [436],
            ],
            [
                'file' => "4",
                'description' => "Газетный киоск. The newsagent's.",
                'lingofon_lesson_id' => [437],
            ],
            [
                'file' => "5",
                'description' => "Еда. Food.",
                'lingofon_lesson_id' => [438],
            ],
            [
                'file' => "6",
                'description' => "Осмотр доcтопримечательностей. Sightseeing.",
                'lingofon_lesson_id' => [439],
            ],
            [
                'file' => "7",
                'description' => "Банк и почта. The bank and the post office.",
                'lingofon_lesson_id' => [440],
            ],
            [
                'file' => "8",
                'description' => "Магазины. The shops.",
                'lingofon_lesson_id' => [441],
            ],
            [
                'file' => "9",
                'description' => "День рождения Саймона. Simon's birthday.",
                'lingofon_lesson_id' => [442],
            ],
            [
                'file' => "10",
                'description' => "Званый вечер. The party.",
                'lingofon_lesson_id' => [443],
            ],
            [
                'file' => "11",
                'description' => "Футбол. Football.",
                'lingofon_lesson_id' => [444],
            ],
            [
                'file' => "12",
                'description' => "Телефонные звонки. Telephone calls.",
                'lingofon_lesson_id' => [445],
            ],
            [
                'file' => "13",
                'description' => "Поездка. A journey.",
                'lingofon_lesson_id' => [446],
            ],
            [
                'file' => "14",
                'description' => "За городом. The country.",
                'lingofon_lesson_id' => [447],
            ],
            [
                'file' => "15",
                'description' => "Парикмахерская и химчистка. The hairdresser's and the cleaner's.",
                'lingofon_lesson_id' => [448],
            ],
            [
                'file' => "16",
                'description' => "Поздняя ночь. A late night.",
                'lingofon_lesson_id' => [449],
            ],
            [
                'file' => "17",
                'description' => "Приятный спокойный день. A nice quiet afternoon.",
                'lingofon_lesson_id' => [450],
            ],
            [
                'file' => "18",
                'description' => "На дискотеке. At a discotheque.",
                'lingofon_lesson_id' => [451],
            ],
            [
                'file' => "19",
                'description' => "Совещание по продажам. A sales conference.",
                'lingofon_lesson_id' => [452],
            ],
            [
                'file' => "20",
                'description' => "Достопримечательности в кембридже. Sightseeing in cambridge.",
                'lingofon_lesson_id' => [453],
            ],
            [
                'file' => "21",
                'description' => "Поездка в Сассекс. Going to Sussex.",
                'lingofon_lesson_id' => [454],
            ],
            [
                'file' => "22",
                'description' => "Как прошли выходные. Hearing about the weekend.",
                'lingofon_lesson_id' => [455],
            ],
            [
                'file' => "23",
                'description' => "Доктор. The doctor.",
                'lingofon_lesson_id' => [456],
            ],
            [
                'file' => "24",
                'description' => "Выгодные покупки. College.",
                'lingofon_lesson_id' => [457],
            ],
            [
                'file' => "25",
                'description' => "Колледж. Bargains.",
                'lingofon_lesson_id' => [458],
            ],
            [
                'file' => "26",
                'description' => "Грустный день Шейлы. A sad day for Sheila.",
                'lingofon_lesson_id' => [459],
            ],
            [
                'file' => "27",
                'description' => "Работа Питера. Peter's job.",
                'lingofon_lesson_id' => [460],
            ],
            [
                'file' => "28",
                'description' => "Новая работа. A new job.",
                'lingofon_lesson_id' => [461],
            ],
            [
                'file' => "29",
                'description' => "Новый дом. A new house.",
                'lingofon_lesson_id' => [462],
            ],
            [
                'file' => "30",
                'description' => "Отъезд из гостиницы. Leaving the hotel.",
                'lingofon_lesson_id' => [463],
            ],
//            [
//                'file' => "39",
//                'description' => 'Союз «till» означает «пока ... не», «до тех пор», «пока ... не». Наречие «very
//                        much».',
//                'wordsKitId' => [387],
//                'lingofon_lesson_id' => [382, 383],
//                'lingofon_lesson_id_speaking' => [383],
//            ],
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
            [
                'url' => 'ninth_english_lesson',
                'nameEn' => 'Ninth',
                'nameRu' => ['Девятый', 'девятого', 'девятому'],
            ],
            [
                'url' => 'tenth_english_lesson',
                'nameEn' => 'Tenth',
                'nameRu' => ['Десятый', 'десятого', 'десятому'],
            ],
            [
                'url' => 'eleventh_english_lesson',
                'nameEn' => 'Eleventh',
                'nameRu' => ['Одиннадцатый', 'одиннадцатого', 'одиннадцатому'],
            ],
            [
                'url' => 'twelfth_english_lesson',
                'nameEn' => 'Twelfth',
                'nameRu' => ['Двенадцатый', 'двенадцатого', 'двенадцатому'],
            ],
            [
                'url' => 'thirteenth_english_lesson',
                'nameEn' => 'Thirteenth',
                'nameRu' => ['Тринадцатый', 'тринадцатого', 'тринадцатому'],
            ],
            [
                'url' => 'fourteenth_english_lesson',
                'nameEn' => 'Fourteenth',
                'nameRu' => ['Четырнадцатый', 'четырнадцатого', 'четырнадцатому'],
            ],
            [
                'url' => 'fifteenth_english_lesson',
                'nameEn' => 'Fifteenth',
                'nameRu' => ['Пятнадцатый', 'пятнадцатого', 'пятнадцатому'],
            ],
            [
                'url' => 'sixteenth_english_lesson',
                'nameEn' => 'Sixteenth',
                'nameRu' => ['Шестнадцатый', 'шестнадцатого', 'шестнадцатому'],
            ],
            [
                'url' => 'seventeenth_english_lesson',
                'nameEn' => 'Seventeenth',
                'nameRu' => ['Семнадцатый', 'семнадцатого', 'семнадцатому'],
            ],
            [
                'url' => 'eighteenth_english_lesson',
                'nameEn' => 'Eighteenth',
                'nameRu' => ['Восемнадцатый', 'восемнадцатого', 'восемнадцатому'],
            ],
            [
                'url' => 'nineteenth_english_lesson',
                'nameEn' => 'Nineteenth',
                'nameRu' => ['Девятнадцатый', 'девятнадцатого', 'девятнадцатому'],
            ],
            [
                'url' => 'twentieth_english_lesson',
                'nameEn' => 'Twentieth',
                'nameRu' => ['Двадцатый', 'двадцатого', 'двадцатому'],
            ],
            [
                'url' => 'twenty-first_english_lesson',
                'nameEn' => 'Twenty-first',
                'nameRu' => ['Двадцать первый', 'двадцать первого', 'двадцать первому'],
            ],
            [
                'url' => 'twenty-second_english_lesson',
                'nameEn' => 'Twenty-second',
                'nameRu' => ['Двадцать второй', 'двадцать второго', 'двадцать второму'],
            ],
            [
                'url' => 'twenty-third_english_lesson',
                'nameEn' => 'Twenty-third',
                'nameRu' => ['Двадцать третий', 'двадцать третьего', 'двадцать третьему'],
            ],
            [
                'url' => 'twenty-fourth_english_lesson',
                'nameEn' => 'Twenty-fourth',
                'nameRu' => ['Двадцать четвертый', 'двадцать четвертого', 'двадцать четвертому'],
            ],
            [
                'url' => 'twenty-fifth_english_lesson',
                'nameEn' => 'Twenty-fifth',
                'nameRu' => ['Двадцать пятый', 'двадцать пятого', 'двадцать пятому'],
            ],
            [
                'url' => 'twenty-sixth_english_lesson',
                'nameEn' => 'Twenty-sixth',
                'nameRu' => ['Двадцать шестой', 'двадцать шестого', 'двадцать шестому'],
            ],
            [
                'url' => 'twenty-seventh_english_lesson',
                'nameEn' => 'Twenty-seventh',
                'nameRu' => ['Двадцать седьмой', 'двадцать седьмого', 'двадцать седьмому'],
            ],
            [
                'url' => 'twenty-eighth_english_lesson',
                'nameEn' => 'Twenty-eighth',
                'nameRu' => ['Двадцать восьмой', 'двадцать восьмого', 'двадцать восьмому'],
            ],
            [
                'url' => 'twenty-ninth_english_lesson',
                'nameEn' => 'Twenty-ninth',
                'nameRu' => ['Двадцать девятый', 'двадцать девятого', 'двадцать девятому'],
            ],
            [
                'url' => 'thirtieth_english_lesson',
                'nameEn' => 'Thirtieth',
                'nameRu' => ['Тридцатый', 'тридцатого', 'тридцатому'],
            ],
        ];
    }
}