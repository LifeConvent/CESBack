function countUp(count,countClass) {
'use strict';
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $(countClass),
        run_count = 1,
        int_speed = 24;
    var int = setInterval(function () {
        if (run_count < div_by) {
            $display.text(speed * run_count);
            run_count++;
        } else if (parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

function showCount(){
    countUp($('.count').text(),'.show_count');
    countUp($('.count1').text(),'.show_count1');
    countUp($('.count2').text(),'.show_count2');
    countUp($('.count3').text(),'.show_count3');
}