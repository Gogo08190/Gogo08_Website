$(document).ready(function() {

    /* Scripts
    ================================================== */

    var pageWidth, pageHeight, ratio, h;

    var basePage = {
        width: 1920,
        height: h,
        scale: 1,
        scaleX: 1,
        scaleY: 1
    };

    Pace.on('hide', function() {
      wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: false,
        live: true
      });

      wow.init();
    });

    var i = 0;
    $("[class*='souligne']").each(function() {
        i = i + 1;
        $(this).attr('data-count-souligne', i);
    });
});
