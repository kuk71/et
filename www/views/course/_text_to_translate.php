<?php
/** @var var $textToTranslate - массив с текстом для перевода и переводом.php */


echo "
<p class='task'><b><a href=\"#\" onclick=\"document.getElementById('text').style.display=''; return false;\">Прочтите и переведите текст&nbsp;>>></a></b></p>

<div style='display: none' id='text'>";

foreach ($textToTranslate AS $num => $text) {
    $literalTranslation = "";
    if (isset($text[2]) && $text[2] !== "") {
        $literalTranslation = " ({$text[2]})";
    }

    echo "
    <div class='text_line'>
        <div class='en'>{$text[0]}</div>
        <div class='ru' id='ru_$num'><b><i>{$text[1]}</i></b>$literalTranslation</div>
        <div class='tr' id='tr_$num' onclick='trDisplay(this)'>
            <div></div>
        </div>
    </div>";
}
echo '</div>';