<?php
namespace app\models\course\listCourse;

/** @var $courseName - Передано из контроллера */
/** @var $courseUrl - Передано из контроллера */
/** @var $header - Получено из вью _index.php конкретного курса */
/** @var $description - Получено из вью _index.php конкретного курса */
/** @var $lessonsName - Получено из вью _index.php конкретного курса */
/** @var $lessonsContent - Получено из вью _index.php конкретного курса */

require_once($courseName . "/_index.php");

$name = "app\models\course\listCourse\\" . $courseName;

$LL = new $name();

$lessonsName = $LL::$lessonsName;
$lessonsContent = $LL::$lessonsContent;
?>

    <style>
        p {
            font-size: 20px;
        }

        div.lesson {
            border: 1px solid black;
            width: 300px;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
        }
    </style>

<?php
echo "
<h1>$header</h1>
$description";
?>

<div style='display: flex; flex-wrap: wrap'>
    <?php


    foreach ($lessonsName as $lessonKey => $lessonName) {
        $lessonContent = $lessonsContent[$lessonKey];
        $lessonUrl = "/course/" . $courseUrl . "/{$lessonName['nameEn']}_english_lesson";

        echo "
        <div class=\"lesson\">
        <H3><a href=\"$lessonUrl\" target=\"_blank\">
              {$lessonName['nameRu'][0]} урок.<br>
              {$lessonName['nameEn']} lesson.</a></H3>
              
        <p>{$lessonContent['description']}</p>
        <p><a href=\"$lessonUrl\"
         target=\"_blank\">Начать занятие</a></p>";

        echo "</div>";
    }

    ?>
</div>
