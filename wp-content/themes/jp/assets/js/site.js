'use strict';

jQuery(document).ready(function ($) {

    // hamburger main menu toggle
    $('.j-menu-toggle').on('click', function () {
        $(this).toggleClass('is-active');
        $('body').toggleClass('u-mobile-menu-active');
    });
});
//# sourceMappingURL=site.js.map
