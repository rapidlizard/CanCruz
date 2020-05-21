require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';


fetch('/api/dates')
    .then((response) => response.json())
    .then(function (data) {
        var disabledDates = data;
        $('.datepicker').datepicker({
            beforeShowDay: function(date){
                var string = jQuery.datepicker.formatDate('dd-mm-yy', date);
                return [ disabledDates.indexOf(string) == -1 ]
            }
        });
    });
