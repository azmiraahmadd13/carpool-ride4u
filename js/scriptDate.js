// Get today's date
var today = new Date();

$("#datepicker").datepicker({
    changeMonth: true,
    changeYear: true,
    minDate: today // set the minDate to the today's date
    // you can add other options here
});