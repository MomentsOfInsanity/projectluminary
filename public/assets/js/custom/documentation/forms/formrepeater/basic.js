"use strict";

var count = 0;
// Class definition
var KTFormRepeaterBasic = function () {
    // Private functions
    var example1 = function () {
        $('#kt_docs_repeater_basic').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();
               // $(this).attr("name", "test");
                //$(this + " :input").attr("name", "test");
                //$(this).find("input").attr("name", "reqrepeter-" + count++);
                //$(this).find("input").attr("id", "reqreqrepeter-" + count++);
                
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
                
            }
        });
    }

    return {
        // Public Functions
        init: function () {
            example1();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTFormRepeaterBasic.init();
});
