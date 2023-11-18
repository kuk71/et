<?php
// вид выводит список всех сформированных пользователем коллекций

/** @var $model app\models\Study\StudyKit */

/** @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

$this->title = "Ускоренная программа изучения слов. 60 новых слов за час.";
$this->params['keywords'] = "английский язык, обучение, бесплатно, система быстрого изучения слов, список английских 
    слов, коллекция слов, ускоренная программа изучения слов, программа ускоренного запоминания слов";
$this->params['description'] = "Система интенсивного увеличения словарного запаса английского языка. Вы сможете в 
    течении часа запомнить 60 новых английских слов.";

$userId = \Yii::$app->user->id;

?>

<h2>Учим английские слова</h2>
<p style="font-size: 20px">Тут Вы можете воспользоваться готовыми коллекциями английских слов или создать собственные коллекции для изучения.
    О том как учить слова можно <a href="/learning_english_words/description">прочитать тут&nbsp;>>></a></p>
<?php
if (!is_null($model->errorText)) {
    echo "<div class=\"col-lg-8\" style='color: red'>{$model->errorText}</div>";
}

echo "<div style='margin: 10px 0; border: 1px solid black; min-width: 300px; max-width: 600px; padding: 10px; margin: 10px; border-radius: 5px'>
             <p><b>Личные коллекции английских слов</b></p>
             <p>В этом разделе Вы можете создать свои собственные коллекции английских слов для изучения.</p>";
if (is_null($userId)) {
    echo "
             Для этого нужно <a href='/registration'><b>Зарегистрироваться&nbsp;>>></b></a> или <a href='/login'><b>Войти&nbsp;>>></b></a>";
} else {
    echo "<a href='/study-kit'><b>Перейти к списку Ваших коллекций&nbsp;>>></b></a>";
}

echo "</div>";

echo "<h3 style='margin: 30px 10px'>Английские слова для изучения. Готовые наборы по темам.</h3>";

echo "<div style='border: 0px solid red;  display: flex; flex-wrap: wrap;'>";
$studyKitList = $model->getStudyKitList();
$i = 0;
foreach ($studyKitList as $studyKit) {
    $kitName = Html::encode($studyKit['study_kit_name']);

    $kitDescription = Html::encode($studyKit['study_kit_description']);

    $study = "<a href='/study?kitId={$studyKit['study_kit_id']}' target='_blank'><b>Изучить</b></a>";
    $list = "<a href='/learning_list_english_words?kitId={$studyKit['study_kit_id']}' target='_blank'><b>Список слов</b></a>";

    echo "<div style='margin: 10px 0; border: 1px solid black; width: 300px; padding: 10px; margin: 10px; border-radius: 5px'>
             <p><b>$kitName</b></p>
             <p>$kitDescription</p>
             $study &nbsp; &nbsp; $list
             
         </div>";

    $i++;
}
echo "</div>";
?>
