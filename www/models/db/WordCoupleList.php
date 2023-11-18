<?php

namespace app\models\db;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "word_couple_list".
 *
 * @property int $word_couple_id - id связи двух слов (пары слов)
 * @property int $word_id - id слова
 * @property int $word_linked_id - id связанного слова (перевода)
 */
class WordCoupleList extends ActiveRecord
{
    /**
     * Возвращает список переводов для $wordId на язык $languageTranslationId
     *
     * @param $wordId - id слова для которого ищется перевод
     * @param $languageTranslationId - id языка на который делается перевод
     * @return array[]
     */
    public static function getWordCouple($wordId, $languageTranslationId)
    {
        $wordId = (int)$wordId;
        $languageTranslationId = (int)$languageTranslationId;

        $wordCouple = self::findBySql(
            "
            SELECT 
                `word_couple_list`.`word_couple_id`,
                `word_list`.`word_spelling`
            FROM
                `word_couple_list`
            JOIN
                `word_list`
                    ON (`word_couple_list`.`word_linked_id` = `word_list`.`word_id`)
            WHERE
                `word_couple_list`.`word_id` = $wordId
                AND `word_list`.`language_id` = $languageTranslationId
            ORDER BY
                `word_list`.`word_spelling` ASC
            "
        )
            ->asArray()
            ->all();

        return $wordCouple;
    }

    /**
     * Возвращает список Id переводов для $wordId на язык $languageTranslationId ранее выбранных пользователем $userId
     *
     * @param $wordId - id слова для которого ищется перевод
     * @param $languageTranslationId - id языка на который делается перевод
     * @return array[]
     */
    public static function getWordCoupleBeforeSelected($wordId, $languageTranslationId, $userId)
    {
        $wordId = (int)$wordId;
        $languageTranslationId = (int)$languageTranslationId;
        $userId = (int)$userId;

        $wordCouple = self::findBySql(
            "
            SELECT 
                `word_couple_list`.`word_couple_id`
            FROM
                `study_kit_list`
            JOIN
                `study_kit`
                    ON (`study_kit_list`.`study_kit_id` = `study_kit`.`study_kit_id`)
            JOIN
                `dic_entry`
                    ON (`study_kit`.`dic_entry_id` = `dic_entry`.`dic_entry_id`)
            JOIN
                `word_couple_list`
                    ON (`dic_entry`.`word_couple_id` = `word_couple_list`.`word_couple_id`)
            WHERE
                `study_kit_list`.`user_id` = $userId
                AND `word_couple_list`.`word_id` = $wordId
                
            "
        )
            ->asArray()
            ->all();

        return $wordCouple;
    }

    public function getWordLinkedSpelling()
    {
        return $this->hasMany(
            WordList::class,
            ["word_id" => "word_linked_id"]
        );
    }

    public static function tableName()
    {
        return 'word_couple_list';
    }

    public function rules()
    {
        return [
            [['word_id', 'word_linked_id'], 'required'],
            [['word_id', 'word_linked_id'], 'integer'],
            [['word_linked_id', 'word_id'], 'unique', 'targetAttribute' => ['word_linked_id', 'word_id']],
        ];
    }
}
