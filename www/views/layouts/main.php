<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);

if(!isset($this->params['keywords'])) {
    $this->params['keywords'] = "";
}

if(!isset($this->params['description'])) {
    $this->params['description'] = "";
}


$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['description']]);


$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>

    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);

    if (Yii::$app->user->isGuest) {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => 'Курс Скультэ', 'options' => ['title' => 'Учебник Валентины Скультэ Английский для детей.'], 'url' => ['/skulte_anglijskij_dlya_detej']],
                ['label' => 'Лингафонные курсы', 'options' => ['title' => 'Лингафонные курсы английского языка'], 'url' => ['/lingofon']],
                ['label' => 'Учим слова', 'options' => ['title' => 'Учим английские слова'], 'url' => ['/learning_english_words']],
                ['label' => 'Войти', 'url' => ['/login']],
                // ['label' => 'Зарегистрироваться', 'url' => ['/registration']],
            ],
        ]);
    } else {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => 'Курс Скультэ', 'options' => ['title' => 'Учебник Валентины Скультэ Английский для детей.'], 'url' => ['/skulte_anglijskij_dlya_detej']],
                ['label' => 'Лингафонные курсы', 'options' => ['title' => 'Лингафонные курсы английского языка'], 'url' => ['/lingofon']],
                ['label' => 'Учим слова', 'options' => ['title' => 'Учим английские слова'], 'url' => ['/learning_english_words']],
                '<li>'
                . Html::beginForm(['/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Выйти',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ],
        ]);
    }


    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>


<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-right">Обратная связь: kuk1@bk.ru</p>
    </div>
</footer>


<?php
    $this->endBody();
    // подключение счетчиков
    require("counters.php");
?>



</body>
</html>
<?php $this->endPage() ?>
