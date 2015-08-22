(function () {
    'use strict';

    $(document).ready(function () {
        var $navMenu = $('.Navigation--menuIcon');

        $navMenu.click(function () {
            var $navigation = $('.Navigation--mobile');
            var $body = $('body');

            if ($navMenu.hasClass('closed')) {
                $body.animate({left: '-250px'}, 400).css({'overflow': 'hidden'});
                $navigation.animate({right: '0'}, 400);
                $(this).removeClass('closed').addClass('open');
            } else if ($navMenu.hasClass('open')) {
                $body.animate({left: '0'}, 400).css({'overflow': 'scroll'});
                $navigation.animate({right: '-250px'}, 400);
                $(this).removeClass('open').addClass('closed');
            }
        });
    });
})();