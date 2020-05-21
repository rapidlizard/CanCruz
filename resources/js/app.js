require('./bootstrap');
reuire

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';


var disabledDates = ["2020-05-22","2020-05-14","2020-05-21"]

$('.datepicker').datepicker({
    beforeShowDay: function(date){
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        return [ disabledDates.indexOf(string) == -1 ]
    }
});



// $(function() {
//     $(".datepicker").datepicker({
//         defaultDate: new Date("3-1-2012"),
//         dateFormat: "dd MM yy",
//         beforeShowDay: unavailable
//     });
// });

// $(function () {
//     $.datepicker.setDefaults($.datepicker.regional["es"]);
//         $(".datepicker").datepicker({
//             firstDay: 1
//         });
// });
// $(function () {
//     $("#off").click(function () {
//         $(".datepicker").datepicker().hide();
//     });
// });

// $(function () {
//     $("#on").click(function () {
//         $(".datepicker").datepicker().show();
//     });
// });


