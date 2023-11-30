function changeVisible(tagId) {
    let displayVal = '';
    let textControl = 'Свернуть';
    const tagIdControl = tagId + 'Control';

    if (document.getElementById(tagId).style.display == '') {
        displayVal = 'none';
        textControl = 'Развернуть';
    }

    document.getElementById(tagId).style.display = displayVal;

    if (document.getElementById(tagIdControl)) {
        document.getElementById(tagIdControl).innerText = textControl;
    }

    return false;
}