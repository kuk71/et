<?php

namespace app\models\course\listCourse;

use app\models\course\LL;


/**
 * Модель для хранения данных об уроках по курсу Скульте
 *
 */
class EverydayEnglish extends LL
{
    protected static function fillLessonsContent()
    {
        self::$lessonsContent = [
            [
                'file' => "1",
                'description' => 'Знакомство в аэропорту.',
                'wordsKitId' => [389, 390],
                'lingofon_lesson_id' => [390, 391],
            ],
        ];
    }

    protected static function fillLessonsName()
    {
        self::$lessonsName = [
            [
                'url' => 'first_english_lesson',
                'nameEn' => 'First',
                'nameRu' => ['Первый', 'первого', 'первому'],
            ],
        ];
    }
}