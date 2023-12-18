"use strict";
var KTSubscriptionsAdvanced = function () {
    var t, e, n = function () {
        t.querySelectorAll("tbody tr").forEach(((t, e) => {
            const n = t.querySelector("td:first-child input"),
                o = t.querySelector("td:nth-child(2) input"),
                i = n.getAttribute("id"),
                r = o.getAttribute("id");
            n.setAttribute("name", "titlelink-" + e), o.setAttribute("name", "link-" + e);
            n.setAttribute('id', 'titlelink-' + e), o.setAttribute('id', 'link-' + e)
        }))
    };
    return {
        init: function () {
            t = document.getElementById("kt_create_new_custom_fields"),
                function () {
                    const o = document.getElementById("kt_create_new_custom_fields_add"),
                        i = t.querySelector("tbody tr td:first-child").innerHTML,
                        r = t.querySelector("tbody tr td:nth-child(2)").innerHTML,
                        c = t.querySelector("tbody tr td:last-child").innerHTML;
                    var d;
                    e = $(t).DataTable({
                        info: !1,
                        order: [],
                        ordering: !1,
                        paging: !1,
                        lengthChange: !1
                    }), o.addEventListener("click", (function (t) {
                        t.preventDefault(), d = e.row.add([i, r, c]).draw().node(), $(d).find("td").eq(2).addClass("text-end"), n()
                    }))
                }(), n(), KTUtil.on(t, '[data-kt-action="field_remove"]', "click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr");
                    Swal.fire({
                        text: "Are you sure you want to delete this field ?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-primary"
                        }
                    }).then((function (t) {
                        t.value ? Swal.fire({
                            text: "You have deleted it!.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        }).then((function () {
                            e.row($(n)).remove().draw()
                        })) : "cancel" === t.dismiss && Swal.fire({
                            text: "It was not deleted.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        })
                    }))
                }))
        }
    }
}();
var KTSubscriptionsAdvancedVe = function () {
    var t, e, n = function () {
        t.querySelectorAll("tbody tr").forEach(((t, e) => {
            const n = t.querySelector("td:first-child input"),
                o = t.querySelector("td:nth-child(2) input"),
                i = n.getAttribute("id"),
                r = o.getAttribute("id");
            n.setAttribute("name", "titlelink-" + e), o.setAttribute("name", "link-" + e);
            n.setAttribute('id', 'titlelink-' + e), o.setAttribute('id', 'link-' + e)
        }))
    };
    return {
        init: function () {
            t = document.getElementById("kt_create_new_custom_fields_ve"),
                function () {
                    const o = document.getElementById("kt_create_new_custom_fields_add_ve"),
                        i = t.querySelector("tbody tr td:first-child").innerHTML,
                        r = t.querySelector("tbody tr td:nth-child(2)").innerHTML,
                        c = t.querySelector("tbody tr td:last-child").innerHTML;
                    var d;
                    e = $(t).DataTable({
                        info: !1,
                        order: [],
                        ordering: !1,
                        paging: !1,
                        lengthChange: !1
                    }), o.addEventListener("click", (function (t) {
                        t.preventDefault(), d = e.row.add([i, r, c]).draw().node(), $(d).find("td").eq(2).addClass("text-end"), n()
                    }))
                }(), n(), KTUtil.on(t, '[data-kt-action="field_remove_ve"]', "click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr");
                    Swal.fire({
                        text: "Are you sure you want to delete this field ?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-primary"
                        }
                    }).then((function (t) {
                        t.value ? Swal.fire({
                            text: "You have deleted it!.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        }).then((function () {
                            e.row($(n)).remove().draw()
                        })) : "cancel" === t.dismiss && Swal.fire({
                            text: "It was not deleted.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        })
                    }))
                }))
        }
    }
}();
var KTSubscriptionsAdvancedModLink = function () {
    var t, e, n = function () {
        t.querySelectorAll("tbody tr").forEach(((t, e) => {
            const n = t.querySelector("td:first-child input"),
                o = t.querySelector("td:nth-child(2) input"),
                i = n.getAttribute("id"),
                r = o.getAttribute("id");
            n.setAttribute("name", "titlelink-ml-" + e), o.setAttribute("name", "link-ml-" + e);
            n.setAttribute('id', 'titlelink-ml-' + e), o.setAttribute('id', 'link-ml-' + e)
        }))
    };
    return {
        init: function () {
            t = document.getElementById("kt_create_new_custom_fields_ml"),
                function () {
                    const o = document.getElementById("kt_create_new_custom_fields_add_ml"),
                        i = t.querySelector("tbody tr td:first-child").innerHTML,
                        r = t.querySelector("tbody tr td:nth-child(2)").innerHTML,
                        c = t.querySelector("tbody tr td:last-child").innerHTML;
                    var d;
                    e = $(t).DataTable({
                        info: !1,
                        order: [],
                        ordering: !1,
                        paging: !1,
                        lengthChange: !1
                    }), o.addEventListener("click", (function (t) {
                        t.preventDefault(), d = e.row.add([i, r, c]).draw().node(), $(d).find("td").eq(2).addClass("text-end"), n()
                    }))
                }(), n(), KTUtil.on(t, '[data-kt-action="field_remove_ml"]', "click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr");
                    Swal.fire({
                        text: "Are you sure you want to delete this field ?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-primary"
                        }
                    }).then((function (t) {
                        t.value ? Swal.fire({
                            text: "You have deleted it!.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        }).then((function () {
                            e.row($(n)).remove().draw()
                        })) : "cancel" === t.dismiss && Swal.fire({
                            text: "It was not deleted.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        })
                    }))
                }))
        }
    }
}();
var KTSubscriptionsAdvancedModLink_edit = function () {
    var t, e, n = function () {
        t.querySelectorAll("tbody tr").forEach(((t, e) => {
            const n = t.querySelector("td:first-child input"),
                o = t.querySelector("td:nth-child(2) input"),
                i = n.getAttribute("id"),
                r = o.getAttribute("id");
            n.setAttribute("name", "titlelink-ml-" + e), o.setAttribute("name", "link-ml-" + e);
            n.setAttribute('id', 'titlelink-ml-' + e), o.setAttribute('id', 'link-ml-' + e)
        }))
    };
    return {
        init: function () {
            t = document.getElementById("kt_create_new_custom_fields_ml_ed"),
                function () {
                    const o = document.getElementById("kt_create_new_custom_fields_add_ml_ed"),
                        i = t.querySelector("tbody tr td:first-child").innerHTML,
                        r = t.querySelector("tbody tr td:nth-child(2)").innerHTML,
                        c = t.querySelector("tbody tr td:last-child").innerHTML;
                    var d;
                    e = $(t).DataTable({
                        info: !1,
                        order: [],
                        ordering: !1,
                        paging: !1,
                        lengthChange: !1
                    }), o.addEventListener("click", (function (t) {
                        t.preventDefault(), d = e.row.add([i, r, c]).draw().node(), $(d).find("td").eq(2).addClass("text-end"), n()
                    }))
                }(), n(), KTUtil.on(t, '[data-kt-action="field_remove_edit_ml_ed"]', "click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr");
                    Swal.fire({
                        text: "Are you sure you want to delete this field ?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-primary"
                        }
                    }).then((function (t) {
                        t.value ? Swal.fire({
                            text: "You have deleted it!.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        }).then((function () {
                            e.row($(n)).remove().draw()
                        })) : "cancel" === t.dismiss && Swal.fire({
                            text: "It was not deleted.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        })
                    }))
                }))
        }
    }
}();
var KTSubscriptionsAdvanced_two = function () {
    var t, e, n = function () {
        t.querySelectorAll("tbody tr").forEach(((t, e) => {
            const n = t.querySelector("td:first-child input"),
                o = t.querySelector("td:nth-child(2) input"),
                i = n.getAttribute("id"),
                r = o.getAttribute("id");
                n.setAttribute("name", "title" + "-" + e), o.setAttribute("name", "file" + "-" + e);
                n.setAttribute('id', 'title-' + e), o.setAttribute('id', 'file-' + e)
        }))
    };
    return {
        init: function () {
            t = document.getElementById("kt_create_new_custom_fields_two"),
                function () {
                    const o = document.getElementById("kt_create_new_custom_fields_add_two"),
                        i = t.querySelector("tbody tr td:first-child").innerHTML,
                        r = t.querySelector("tbody tr td:nth-child(2)").innerHTML,
                        c = t.querySelector("tbody tr td:last-child").innerHTML;
                    var d;
                    e = $(t).DataTable({
                        info: !1,
                        order: [],
                        ordering: !1,
                        paging: !1,
                        lengthChange: !1
                    }), o.addEventListener("click", (function (t) {
                        t.preventDefault(), d = e.row.add([i, r, c]).draw().node(), $(d).find("td").eq(2).addClass("text-end"), n()
                    }))
                }(), n(), KTUtil.on(t, '[data-kt-action="field_remove"]', "click", (function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr");
                    Swal.fire({
                        text: "Are you sure you want to delete this field ?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-primary"
                        }
                    }).then((function (t) {
                        t.value ? Swal.fire({
                            text: "You have deleted it!.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        }).then((function () {
                            e.row($(n)).remove().draw()
                        })) : "cancel" === t.dismiss && Swal.fire({
                            text: "It was not deleted.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        })
                    }))
                }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTSubscriptionsAdvanced.init();
    KTSubscriptionsAdvanced_two.init();
    KTSubscriptionsAdvancedVe.init();
    KTSubscriptionsAdvancedModLink.init();
    KTSubscriptionsAdvancedModLink_edit.init();

}));