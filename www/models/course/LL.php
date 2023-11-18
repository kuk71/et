<?php

namespace app\models\course;

use app\models\db\ListToStudy as LTS;
use yii\base\Model;

class LL extends Model
{
    public static $lessonsName = [];

    public static $lessonsContent = [];

    private static $lessonNamePrev;

    private static $lessonNameNext;

    private static $lessonKey;

    public function __construct()
    {
        static::fillLessonsName();
        static::fillLessonsContent();
    }

    public static function getLessonKey($lessonName = "")
    {
        if (!isset(self::$lessonKey)) {
            self::$lessonKey = array_search($lessonName, array_column(self::$lessonsName, 'url'));
        }

        return self::$lessonKey;
    }

    public static function getLessonNamePrev()
    {
        if (!isset(self::$lessonNamePrev)) {
            self::$lessonNamePrev = "";

            if (self::$lessonKey > 0) {
                self::$lessonNamePrev = self::$lessonsName[self::$lessonKey - 1]['url'];
            }
        }

        return self::$lessonNamePrev;
    }

    public static function getLessonNameNext()
    {
        if (!isset(self::$lessonNameNext)) {
            self::$lessonNameNext = "";
            if (self::$lessonKey < (count(self::$lessonsName) - 1)) {
                self::$lessonNameNext = self::$lessonsName[self::$lessonKey + 1]['url'];
            }
        }

        return self::$lessonNameNext;
    }


    public static function getWordList($keyKitId)
    {
        return LTS::getDicEntryContent(self::$lessonsContent[self::$lessonKey]['wordsKitId'][$keyKitId], -1);
    }

    protected static function fillLessonsContent()
    {
        self::$lessonsContent = [];
    }

    protected static function fillLessonsName()
    {
        self::$lessonsName = [];
    }
}