<?php
/** @var $examples array(string) - массив с переводом; 0 - текст, 1 - перевод, 2 - дословный перевод */
$content = "
        <p class='example'>Пример: </p><div class='example'>";

foreach ($examples as $example) {
    $content .= "<p class='exampleCont'><span class='exampleText'>{$example[0]}</span>";

    if (isset($example[1]) && $example[1] !== "") {
        $content .= " — <span class='exampleTr'>{$example[1]}</span>";
    }

    if (isset($example[2]) && $example[2] !== "") {
        $content .= " (<span class='exampleVr'>{$example[2]}</span>)";
    }

    $content .= "</p>";
}

echo $content . "</div>";

