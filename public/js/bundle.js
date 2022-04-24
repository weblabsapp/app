(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
/**
 *
 * detectIncognito v1.0.0 - (c) 2022 Joe Rutkowski <Joe@dreggle.com> (https://github.com/Joe12387/detectIncognito)
 *
 **/
var detectIncognito = function() {
  return new Promise(function(resolve, reject) {
    var browserName = "Unknown";
  
    function __callback(isPrivate) {
      resolve({
        isPrivate: isPrivate,
        browserName: browserName
      });
    }
    
    function identifyChromium() {
      var ua = navigator.userAgent;
      if (ua.match(/Chrome/)) {
        if (navigator.brave !== undefined) {
          return "Brave"
        } else if (ua.match(/Edg/)) {
          return "Edge";
        } else if (ua.match(/OPR/)) {
          return "Opera";
        }
        return "Chrome";
      } else {
        return "Chromium";
      }
    }
    
    function assertEvalToString(value) {
      return value === eval.toString().length;
    }
    
    function isSafari() {
      var v = navigator.vendor;
      return v !== undefined && v.indexOf("Apple") === 0 && assertEvalToString(37);
    }
  
    function isChrome() {
      var v = navigator.vendor;
      return v !== undefined && v.indexOf("Google") === 0 && assertEvalToString(33);
    }
  
    function isFirefox() {
      return document.documentElement !== undefined && document.documentElement.style.MozAppearance !== undefined && assertEvalToString(37);
    }
  
    function isMSIE() {
      return navigator.msSaveBlob !== undefined && assertEvalToString(39);
    }
  
    /**
     * Safari (Safari for iOS & macOS)
     **/
  
    function macOS_safari14() {
      try {
        window.safari.pushNotification.requestPermission("https://example.com", "private", {}, (function() {}));
      } catch (e) {
        return __callback(!new RegExp("gesture").test(e));
      }
      return __callback(false);
    }
  
    function iOS_safari14() {
      var tripped = false;
      var iframe = document.createElement("iframe");
      iframe.style.display = "none";
      document.body.appendChild(iframe);
  
      iframe.contentWindow.applicationCache.addEventListener("error", function() {
        tripped = true;
        return __callback(true);
      });
  
      setTimeout(function() {
        if (!tripped) {
          __callback(false);
        }
      }, 100);
    }
  
    function oldSafariTest() {
      var openDB = window.openDatabase;
      var storage = window.localStorage;
      try {
        openDB(null, null, null, null);
      } catch (e) {
        return __callback(true);
      }
      try {
        storage.setItem("test", "1");
        storage.removeItem("test");
      } catch (e) {
        return __callback(true);
      }
      return __callback(false);
    }
  
    function safariPrivateTest() {
      var w = window;
      if (navigator.maxTouchPoints !== undefined) {
        if (w.safari !== undefined && w.DeviceMotionEvent === undefined) {
          browserName = "Safari for macOS";
          macOS_safari14();
        } else if (w.DeviceMotionEvent !== undefined) {
          browserName = "Safari for iOS";
          iOS_safari14();
        } else {
          reject(new Error("detectIncognito Could not identify this version of Safari"));
        }
      } else {
        browserName = "Safari";
        oldSafariTest();
      }
    }
  
    /**
     * Chrome
     **/
  
    function getQuotaLimit() {
      var w = window;
      if (w.performance !== undefined && w.performance.memory !== undefined && w.performance.memory.jsHeapSizeLimit !== undefined) {
        return performance.memory.jsHeapSizeLimit;
      }
      return 1073741824;
    }
  
    // >= 76
    function storageQuotaChromePrivateTest() {
      navigator.webkitTemporaryStorage.queryUsageAndQuota(
        function(usage, quota) {
          __callback(quota < getQuotaLimit());
        },
        function(e) {
          reject(new Error("detectIncognito somehow failed to query storage quota: " + e.message));
        }
      );
    }
  
    // 50 to 75
    function oldChromePrivateTest() {
      var fs = window.webkitRequestFileSystem;
      var success = function() {
        __callback(false);
      };
      var error = function() {
        __callback(true);
      };
      fs(0, 1, success, error);
    }
  
    function chromePrivateTest() {
      if (Promise !== undefined && Promise.allSettled !== undefined) {
        storageQuotaChromePrivateTest();
      } else {
        oldChromePrivateTest();
      }
    }
  
    /**
     * Firefox
     **/
  
    function firefoxPrivateTest() {
      __callback(navigator.serviceWorker === undefined);
    }
  
    /**
     * MSIE
     **/
  
    function msiePrivateTest() {
      __callback(window.indexedDB === undefined);
    }
  
    function main() {
      if (isSafari()) {
        safariPrivateTest();
      } else if (isChrome()) {
        browserName = identifyChromium();
        chromePrivateTest();
      } else if (isFirefox()) {
        browserName = "Firefox";
        firefoxPrivateTest();
      } else if (isMSIE()) {
        browserName = "Internet Explorer";
        msiePrivateTest();
      } else {
        reject(new Error("detectIncognito cannot determine the browser"));
      }
    }
  
    main();
  });
};

module.exports = detectIncognito;

},{}],2:[function(require,module,exports){
// Helper functions
const detectIncognito = require('./detectIncognito');

// Detect browser private mode
window.addEventListener("load", (e) => {
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
                } else {
                    translations[key] = translations[key] + `<br><span class="invalid-feedback d-inline">${translations[replacement]}</span>`;
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
    if ('responseJSON' in xhr && 'content' in xhr.responseJSON) {
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
    document.getElementById('recaptcha').style.display = !!('responseJSON' in xhr
    && 'content' in xhr.responseJSON
    && 'is_recaptcha_required' in xhr.responseJSON.content
    && xhr.responseJSON.content.is_recaptcha_required) ? 'inline-block' : 'none';
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
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        xhrFields: {
            withCredentials: true
        }
    });

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
        let errorCallbackResult;
        if (typeof settings.error !== "undefined") {
            errorCallbackResult = settings.error(jqxhr);
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

},{"./detectIncognito":1}]},{},[2]);
