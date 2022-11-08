var pipActive = false;

function applyListeners(videoElem) {
    videoElem.addEventListener("timeupdate", checkPip, false);
    videoElem.addEventListener('enterpictureinpicture', function () {
        pipActive = true;
    });

    videoElem.addEventListener('leavepictureinpicture', function () {
        pipActive = false;
        $(this).closest('.modal').modal('show');
        this.style.filter = 'brightness(100%)';
    });
}

function checkPip(){
    if (!('pictureInPictureEnabled' in document) || !document.pictureInPictureEnabled) {
        return;
    }

    let requestPipTime = parseFloat(this.dataset.requestPipTime);
    let requirePip = eval(this.dataset.requirePip);
    let threshold = 0.5;

    if((requirePip && !pipActive && this.currentTime >= requestPipTime) || ((this.currentTime >= requestPipTime && this.currentTime <= requestPipTime + threshold) && !pipActive)){
        this.pause();
        this.style.filter = 'brightness(30%)';
        document.getElementById('request-pip-div').style.display = 'block';
    }
}

function applyPip(videoElem) {
    $(videoElem).closest('.modal').modal('hide');
    videoElem.requestPictureInPicture().then((pictureInPictureWindow => {
        delete videoElem.style['filter'];
        videoElem.play();
        pipActive = true;
    }))
}