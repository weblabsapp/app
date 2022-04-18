// Helper functions
window.mapObj = (obj, func) => {
    return Object.fromEntries(Object.entries(obj).map(([k, v]) => [k, func(k, v)]));
}

window.translate = (key, replacements = {}) => {
    let translations = localStorage.getItem('translations');
    if (translations) {
        translations = JSON.parse(translations);
        if (key in translations) {
            mapObj(replacements, (searchFor, replacement) => {
                if (translations[key].includes(':'+searchFor)) {
                    translations[key] = translations[key].replace(':'+searchFor, replacement);
                }
            });
            return translations[key];
        }
    }
    return key;
}

window.jsonizeForm = (form) => {
    const array = $(form).serializeArray(); // Encodes the set of form elements as an array of names and values.
    const json = {};
    $.each(array, function () {
        json[this.name] = this.value || "";
    });
    return JSON.stringify(json);
}

window.getErrorFromResponse = (xhr) => {
    if ('responseJSON' in xhr && 'content' in xhr.responseJSON && 'description' in xhr.responseJSON.content) {
        return xhr.responseJSON.content.description;
    } else {
        return 'something_went_wrong';
    }
}

window.isToast = (xhr) => {
    return !!(
        'content' in xhr.responseJSON
        && 'show_toast' in xhr.responseJSON.content
        && xhr.responseJSON.content.show_toast
    );
}

window.showToast = (toast) => {
    if (typeof Toast != "undefined") {
        Toast.setPlacement(TOAST_PLACEMENT.TOP_RIGHT);
        Toast.create({
            title: "Weblabs",
            message: toast.message,
            status: toast.status,
            animation: true
        });
    }
}


if (!window.jQuery) {
    console.log('jQuery is not loaded!');
}

if ($ === jQuery) {
// Animate Delay
    setTimeout(function () {
        $("#cspio-content").show().addClass('animated fadeIn');
    }, 250);

    window.activeRequests = [];
    window.queuedToasts = [];

    $(document).ajaxSend(function(e, jqxhr, settings) {
        let i = activeRequests.indexOf(settings.url)
        if (i !== -1) {
            jqxhr.abort();
        }
        activeRequests.push(settings.url);
    });

    $(document).ajaxSuccess(function(e, jqxhr, settings, data) {
        let successCallbackResult = settings.success(data);
        if (typeof successCallbackResult !== "undefined" && isToast(jqxhr)) {
            queuedToasts.push(successCallbackResult);
        }
    });

    $(document).ajaxError(function(e, jqxhr, settings) {
        if (jqxhr.statusText === "abort") {
            return;
        }
        let errorCallbackResult = settings.error(jqxhr);
        if (typeof errorCallbackResult !== "undefined" && isToast(jqxhr)) {
            queuedToasts.push(errorCallbackResult);
        }
    });

    $(document).ajaxComplete(function(e, jqxhr, settings) {
        let i = activeRequests.indexOf(settings.url);
        if (i !== -1) {
            setTimeout(function(){activeRequests.splice(activeRequests.indexOf(settings.url), 1); }, 75);
        }

        if (queuedToasts.length) {
            showToast(queuedToasts.shift());
        }
    });
}
