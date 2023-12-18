"use strict";
var KTAccountSettingsDeactivateAccount = function () {
    var t, n, e;
    return {
        init: function () {
            (t = document.querySelector("#kt_account_deactivate_form")) && (e = document.querySelector("#kt_account_deactivate_account_submit"), n = FormValidation.formValidation(t, {
                fields: {
                    deactivate: {
                        validators: {
                            notEmpty: {
                                message: "Please check the box to deactivate your account"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    submitButton: new FormValidation.plugins.SubmitButton,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTAccountSettingsDeactivateAccount.init()
}));