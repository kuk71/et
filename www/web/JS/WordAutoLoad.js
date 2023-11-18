// предзагружает слова для последующей озвучки

// директория в которой лежит озвучка
const mp3Dir = '/wav-mp3/';

// аудио плеер для проигрывания слов
const playerWork = new Audio();

// предзагрузка аудио
let preloadAudioItem = 0;

const preloadAudioPlayer = new Audio();
preloadAudioPlayer.src = getMp3Name(wordIdForAutoLoad[0]);

preloadAudioItem = 0;

preloadAudioPlayer.addEventListener('loadeddata', function () {
    preloadAudioItem++;
    if (preloadAudioItem < wordIdForAutoLoad.length) {
        preloadAudioPlayer.src = getMp3Name(wordIdForAutoLoad[preloadAudioItem]);
    }
}, false);

function getMp3Name(id) {
    return (mp3Dir + id + ".mp3");
}

function playerWorkPlay(wordId) {
    playerWork.src = getMp3Name(wordId);
    playerWork.play();
}
