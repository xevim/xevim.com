/**
 * Created by matt on 11/17/15.
 */

/* top scroll 40px delay */
$(window).scroll(function () {
    $("#c1").css("top", Math.max(0, 40 - $(this).scrollTop()));
});

