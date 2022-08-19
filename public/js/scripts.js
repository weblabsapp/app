// Helper functions
const detectIncognito = require('./detectIncognito.min');
window.userLocation = require('./user-location.min');
window.formValidation = require('./form-validation.min');
window.imgLoader = new Image();
imgLoader.src= '/images/loader.gif';

window.addEventListener("load", (e) => {
    // Detect browser private mode
    detectIncognito().then(function(result) {
        if (result.isPrivate) {
            showToast({
                message: "Please use the platform in non-private mode",
                status: TOAST_STATUS.WARNING
            });
            setInterval(function () {
                let overlayDiv = document.getElementsByClassName('site-disabled-overlay');
                if (!overlayDiv.length) {
                    overlayDiv = document.createElement('div');
                    overlayDiv.classList.add('site-disabled-overlay');
                    document.body.prepend(overlayDiv);
                } else {
                    overlayDiv.item(0).classList.remove('hidden');
                }
            }, 1);
            throw new Error('Run in private mode');
        }
    }).catch(function(error) {
        console.log(error);
    });
});

Array.from(document.getElementsByTagName('form')).forEach((form) => {
    form.addEventListener("submit", function (e) {
        // Validate recaptcha
        let recaptchaForm=e.target.querySelector("#recaptcha");
        if(recaptchaForm && window.getComputedStyle(recaptchaForm).getPropertyValue('display') !== 'none'){
            let r=recaptchaForm.querySelector("textarea");
            if (!r || !r.value) {
                if (!r) {
                    formValidation.resetErrors(recaptchaForm).addError(recaptchaForm, "text", [{"recaptcha": translate("please_verify_recaptcha")}]);
                } else if (!r.value) {
                    formValidation.resetErrors(r).addError(r, "text", [{"recaptcha": translate("please_verify_recaptcha")}]);
                }
                e.preventDefault() || e.stopImmediatePropagation();
            } else {
                formValidation.resetErrors(r);
            }
        }
    });
});

/**
 * Map object entries against a custom callback
 *
 * @param obj
 * @param func
 * @returns {{[p: string]: undefined}}
 */
window.mapObj = (obj, func) => {
    return Object.fromEntries(Object.entries(obj).map(([k, v]) => [k, func(k, v)]));
}

/**
 * Translate keys (Translations are saved in localStorage)
 *
 * @param key
 * @param replacements
 * @returns {*}
 */
window.translate = (key, replacements = {}) => {
    let translations = localStorage.getItem('translations');
    if (translations) {
        translations = JSON.parse(translations);
        if (key in translations) {
            mapObj(replacements, (searchFor, replacement) => {
                if (translations[key].includes(':'+searchFor)) {
                    translations[key] = translations[key].replace(':'+searchFor, replacement);
                } else if (replacement in translations) {
                    translations[key] = translations[key] + `<br><span class="invalid-feedback d-inline">${translations[replacement]}</span>`;
                } else {
                    translations[key] = translations[key] + `<br><span class="invalid-feedback d-inline">${replacement}</span>`;
                }
            });
            return translations[key];
        }
    }
    return key;
}

/**
 * Make JSON object from form data
 *
 * @param form
 * @returns {string}
 */
window.jsonizeForm = (form) => {
    const array = $(form).serializeArray(); // Encodes the set of form elements as an array of names and values.
    const json = {};
    $.each(array, function () {
        json[this.name] = this.value || "";
    });
    return JSON.stringify(json);
}

/**
 * Get error message from API response
 *
 * @param xhr
 * @returns {string|[null,{}]}
 */
window.getErrorFromResponse = (xhr) => {
    let description = null, errors = {};
    if ('responseJSON' in xhr && typeof xhr.responseJSON !== 'undefined' && 'content' in xhr.responseJSON) {
        if ('description' in xhr.responseJSON.content) {
            description = xhr.responseJSON.content.description.replace("\n", "<br>");
        }
        if ('errors' in xhr.responseJSON.content) {
            errors = xhr.responseJSON.content.errors;
            mapObj(errors, (field, error) => {
                return error.replace("\n", "<br>");
            });
        }

        return [description, errors];
    } else {
        return 'something_went_wrong';
    }
}

/**
 * Detects if API response requires showing toast alert for client
 *
 * @param xhr
 * @returns {boolean}
 */
window.isToast = (xhr) => {
    return !!(
        'responseJSON' in xhr
        && typeof xhr.responseJSON !== 'undefined'
        && 'content' in xhr.responseJSON
        && 'show_toast' in xhr.responseJSON.content
        && xhr.responseJSON.content.show_toast
    );
}

/**
 * Show toast alert depending on server side decision
 *
 * @param toast
 */
window.showToast = (toast) => {
    if (typeof Toast != "undefined") {
        Toast.setPlacement(TOAST_PLACEMENT.TOP_RIGHT);
        Toast.create({
            title: "Web Labs",
            message: toast.message,
            status: toast.status,
            animation: true
        });
    }
}

/**
 * Show Recaptcha depending on server side decision
 *
 * @param xhr
 */
window.showRecaptchaIfRequired = (xhr) => {
    let recaptchaForm = document.getElementById('recaptcha');

    if (typeof recaptchaForm === "undefined" || !recaptchaForm) {
        return;
    }

    if (!!('responseJSON' in xhr
    && 'content' in xhr.responseJSON
    && 'is_recaptcha_required' in xhr.responseJSON.content
    && xhr.responseJSON.content.is_recaptcha_required)) {
        recaptchaForm.style.display = 'inline-block';
        if (typeof grecaptcha !== "undefined") {
            grecaptcha.reset();
        }
    } else {
        recaptchaForm.style.display = 'none';
    }
}

/**
 * Get redirect URI
 *
 * @returns {string|boolean}
 */
window.getRedirectUri = () => {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });

    let redirect_uri;
    return (redirect_uri = decodeURI(params.redirect_uri)) !== "null" ? redirect_uri : false;
}

/**
 * Show / Hide window loader
 *
 * @param action
 * @param form
 */
window.loader = (action, form) => {
    let disabalableElements = 'input, textarea, select, button';
    if (action === "show") {
        if (form && form.nodeName === "FORM") {
            form.querySelectorAll(disabalableElements).forEach((element) => {
                element.disabled = true;
            });
        }

        if (document.body.querySelector('#form-loader')) {
            return;
        }

        let formLoader = document.createElement('div');
        formLoader.setAttribute('id', 'form-loader');
        formLoader.classList.add('clearfix');

        let formLoaderChildren = document.createElement('div');
        formLoaderChildren.classList.add('float-right');
        formLoaderChildren.setAttribute('role', 'status');

        formLoaderChildren.appendChild(imgLoader);
        formLoader.appendChild(formLoaderChildren);
        document.body.appendChild(formLoader);
    } else {
        if (form && form.nodeName === "FORM") {
            form.querySelectorAll(disabalableElements).forEach((element) => {
                element.disabled = false;
            });
        }
        let formLoader = document.body.querySelector('#form-loader');
        if (formLoader) {
            formLoader.remove();
        }
    }
}

/**
 * Redirect user to last in progress lesson
 *
 * @param courseTag
 * @param lessonTag
 */
window.continueLearning = (courseTag, lessonTag) => {
    window.location.href = '/course/' + courseTag + '/lesson/' + lessonTag;
}

/**
 * Disable functions calls from browser's console
 * NOTE: Define all required functions above this one
 *
 */
// (function () {
//         (function a() {
//                 try {
//                     (function b(i) {
//                             if (('' + (i / i)).length !== 1 || i % 20 === 0) {
//                                 (function () { }).constructor('debugger')()
//                             } else {
//                                 debugger
//                             }
//                             b(++i)
//                         }
//                     )(0)
//                 } catch (e) {
//                     setTimeout(a, 5000)
//                 }
//             }
//         )()
//     }
// )();





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

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        xhrFields: {
            withCredentials: true
        }
    });

    $(document).ajaxSend(function(e, jqxhr, settings) {
        if ('auth' in settings) {
            jqxhr.setRequestHeader('Authorization', 'Bearer ' + localStorage.getItem('access_token'));
            jqxhr.setRequestHeader('X-Remember-Token', localStorage.getItem('remember_token'));
        }
        let i = activeRequests.indexOf(settings.url)
        if (i !== -1) {
            jqxhr.abort();
        }
        activeRequests.push(settings.url);
    });

    $(document).ajaxSuccess(function(e, jqxhr, settings, data) {
        let successCallbackResult;
        if (typeof settings.success !== "undefined") {
            successCallbackResult = settings.success(data, true);
        }
        if (typeof successCallbackResult !== "undefined" && isToast(jqxhr)) {
            queuedToasts.push(successCallbackResult);
        }
    });

    $(document).ajaxError(function(e, jqxhr, settings) {
        let errorCallbackResult;
        if (typeof settings.error !== "undefined") {
            errorCallbackResult = settings.error(jqxhr, true);
        }
        if (typeof settings.fail !== "undefined") {
            errorCallbackResult = settings.fail(jqxhr, true);
        }
        if (typeof errorCallbackResult !== "undefined" && isToast(jqxhr)) {
            queuedToasts.push(errorCallbackResult);
        }
        showRecaptchaIfRequired(jqxhr);
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
