<script type="text/javascript">
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
</script>
