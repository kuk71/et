<?php
// формирует массив id слов для автозагрузки и подгружает JS скрипты автозагрузки слов и управления локальным хранилищем

/** @var  $kitForStudy - передано параметром вью*/

$wordIdForAutoLoad = [];
$entryIdList = [];
foreach ($kitForStudy AS $entryId => $entry) {
    $wordIdForAutoLoad[] = $entry[0];
    $entryIdList[] = $entryId;
}

echo "
<SCRIPT>
    const wordIdForAutoLoad = [" . implode(", ", $wordIdForAutoLoad) . "];
    const entryIdList = [" . implode(", ", $entryIdList) . "];
</SCRIPT>

<SCRIPT src='/JS/LocalStorage.js?time=<?= time() ?>'></SCRIPT>
<SCRIPT src='/JS/WordAutoLoad.js'></SCRIPT>
";

