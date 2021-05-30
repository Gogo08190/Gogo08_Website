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

    if ($(window).width() > 960) {
      $(function() {
          var $page = $('#wrapper');

          getPageSize();
          scalePages($page, pageWidth, pageHeight, );
          ratio = $('body').width() / $('body').height();
          h = 1920 / ratio;

          //using underscore to delay resize method till finished resizing window
          $(window).resize(_.debounce(function () {
              if ($(window).width() > 960) {
                  getPageSize();
                  scalePages($page, pageWidth, pageHeight);
              }
          }, 150));


          function getPageSize() {
              pageHeight = $('body').height();
              pageWidth = $('body').width();
              ratio = $('body').width() / $('body').height();
              h = 1920 / ratio;
          }

          function scalePages(page, maxWidth, maxHeight) {
              var scaleX = 1, scaleY = 1;
              scaleX = maxWidth / basePage.width;
              scaleY = maxHeight / basePage.height;
              basePage.scaleX = scaleX;
              basePage.scaleY = scaleY;
              basePage.scale = (scaleX > scaleY) ? scaleY : scaleX;

              var newLeftPos = Math.abs(Math.floor(((basePage.width * basePage.scale) - maxWidth)/2));
              var newTopPos = Math.abs(Math.floor(((basePage.height * basePage.scale) - maxHeight)/2));

              page.attr('style', 'transform:scale(' + basePage.scale + '); -webkit-transform:scale(' + basePage.scale + ');');
          }
      });
    }

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
