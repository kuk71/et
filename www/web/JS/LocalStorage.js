let learnedEntryId = getLearnedEntryId();

markLearnedWords();

// сохраняет в локальное хранилище данные о
// словарных статьях которые не нужно проигрывать
function saveLearnedEntryId(e) {
    if (e.checked) {
        // убрать элемент из объекта
        delete learnedEntryId[e.id]
    } else {
        // добавить элемент в объект
        learnedEntryId[e.id] = true;
    }

    localStorage.setItem('learnedEntryId', JSON.stringify(learnedEntryId));
}

// получает из локального хранилища данные о словарных
// статьях выключенных их воспроизведения
function getLearnedEntryId() {
    let learnedEntryId = localStorage.getItem('learnedEntryId');

    if (!learnedEntryId) {
        learnedEntryId = {};
    } else {
        learnedEntryId = JSON.parse(learnedEntryId);
    }

    return learnedEntryId;
}

// снимает отметку о воспроизведении с ранее выученных словарных статей
function markLearnedWords() {
    for (let key in learnedEntryId) {
        if (document.getElementById(key)) {
            document.getElementById(key).checked = false;
        }
    }
}

// ставит или снимает отметку со слов для воспроизведения
function changeAll() {
    entryIdList.forEach(function(entryId) {
        const a = document.getElementById(entryId);
        a.checked = document.getElementById('checkAll').checked;
        saveLearnedEntryId(a);
    });
}
