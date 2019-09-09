(function($){
    $(document).ready(function(){
        // console.log('minhawp ready! ');
        if( $(window).width() > 600 && $(".sdh_shop_loop_box").length > 0  ){

            var thewidth =  $(window).width();
            var theheight =  $(window).height();
            $(".sdh_shop_loop_box").hover(function() {
                $(this).mousemove(function(e)
                {             var theX = thewidth - e.clientX ;
                    var theY = theheight - e.clientY ;
                    if (theX > 520 ) {
                        theX = e.clientX;
                    } else {
                        theX = thewidth - 520;
                    }
                    if (theY > $(this).children('.hoverbox').height()) {
                        theY = e.clientY;
                    } else {
                        theY = theheight - $(this).children('.hoverbox').height() - 30;
                    }

                    $(this).children('.sdh_hoverbox').css('left', theX + 10 ).css('top', theY + 10 ).css('display', 'block');
                });
            }, function() {
                $(this).children('.sdh_hoverbox').css('display', 'none');
            });

        }//check

    });//dom ready
})(jQuery);
