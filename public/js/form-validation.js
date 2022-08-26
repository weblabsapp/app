const validation = require('./validate.min');
const ValidationError = require('./exceptions/validation.error.min');

if (!window.visibleTooltips || typeof window.visibleTooltips === "undefined") {
    window.visibleTooltips = {};
}

class FormValidation {
    validate(form, constraints = {}, showErrorsAs = "text") {
        this.resetErrors(form);
        let errors = validation.validate(form, constraints);
        if (errors) {
            this.showErrors(form, errors, showErrorsAs);
            throw new ValidationError('Validation failed!', errors);
        }
    };

    showErrors(form, errors, showAs = "text") {
        form.querySelectorAll("input[name]:not([type='hidden']), select[name], textarea").forEach((input) => {
            this.showErrorsForInput(input, errors && errors[input.name], showAs);
        });
    };

    showErrorsForInput(input, errors, showAs) {
        let formGroup = this.closestParent(input.parentNode, "form-group");
        this.resetFormGroup(formGroup);
        if (errors) {
            formGroup.classList.add("has-error");
            this.addError(input, showAs, errors);
        } else {
            formGroup.classList.add("has-success");
        }
    };

    addError(input, type, errors) {
        if(window.innerWidth < 740) {
            type = "text";
        }
        switch (type) {
            case "tooltip":
                if (typeof bootstrap.Tooltip === "undefined") {
                    this.addError(input, "text", errors);
                    return;
                }
                input.dataset.toggle = "tooltip";
                input.dataset.placement = "left";
                input.dataset.customClass = "tooltip-danger";
                input.dataset.originalTitle = errors.join();
                if (!input.dataset.tooltipId) {
                    let tooltip = new bootstrap.Tooltip(input);
                    tooltip.html = true;
                    tooltip.show();
                    input.dataset.tooltipId = tooltip.tip.id;
                    visibleTooltips[tooltip.tip.id] = tooltip;
                }
                $(input).unbind().bind('mouseover', e => {
                    if (e.target.dataset.tooltipId && visibleTooltips[e.target.dataset.tooltipId]) {
                        let oldTooltipId = e.target.dataset.tooltipId;
                        let tooltip = visibleTooltips[e.target.dataset.tooltipId];
                        tooltip.show();
                        let newTooltipId = tooltip.tip.id;
                        e.target.dataset.tooltipId = newTooltipId;
                        delete visibleTooltips[oldTooltipId];
                        visibleTooltips[newTooltipId] = tooltip;
                    }
                }).bind('mouseout', e => {
                    if (e.target.dataset.tooltipId && visibleTooltips[e.target.dataset.tooltipId]) {
                        visibleTooltips[e.target.dataset.tooltipId].hide();
                    }
                });
                break;
            case "text":
                let block = document.createElement("div");
                block.classList.add("invalid-feedback");
                block.classList.add("mb-2");
                block.style.display = 'block';
                errors.forEach(function (error) {
                    let p = document.createElement('p');
                    if (typeof  error === "object") {
                        error = Object.values(error)[0];
                    }
                    p.innerText = error;
                    p.classList.add('m-0');
                    block.appendChild(p);
                });
                input.parentNode.append(block);
                break;
        }
    };

    resetErrors(input) {
        if (/^form$/i.test(input.nodeName)) {
            let errorBag;
            input.querySelectorAll("input[name]:not([type='hidden']), select[name], textarea").forEach((input) => {
                input.closest('.form-group').classList.remove('has-error');
                (errorBag = input.parentNode.querySelector('.invalid-feedback')) ? errorBag.remove() : [];
                this.resetTooltips(input);
            });
        } else {
            let errorBag;
            input.closest('.form-group').classList.remove('has-error');
            (errorBag = input.parentNode.querySelector('.invalid-feedback')) ? errorBag.remove() : [];
            this.resetTooltips(input);
        }

        return this;
    };

    resetTooltips(input) {
        let errorTooltip = document.querySelector('#'+input.dataset.tooltipId);
        if (errorTooltip) {
            errorTooltip.remove();
        }
        delete input.dataset.toggle;
        delete input.dataset.placement;
        delete input.dataset.customClass;
        delete input.dataset.tooltipId;
        delete input.title;
        if (visibleTooltips[input.dataset.tooltipId]) {
            visibleTooltips[input.dataset.tooltipId].hide();
            delete visibleTooltips[input.dataset.tooltipId];
        }
    };

    resetFormGroup(formGroup) {
        formGroup.classList.remove("has-error");
        formGroup.classList.remove("has-success");
        formGroup.querySelectorAll(".help-block.error").forEach((el) => {
            el.parentNode.removeChild(el);
        });
    };

    closestParent(child, className) {
        if (!child || child === document) {
            return null;
        }
        if (child.classList.contains(className)) {
            return child;
        } else {
            return this.closestParent(child.parentNode, className);
        }
    }
}

window.formValidation = new FormValidation();
