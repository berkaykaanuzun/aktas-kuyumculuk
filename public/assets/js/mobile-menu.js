jQuery(document).ready(function($) {
    // Hamburger menü toggle
    $('#show-megamenu').on('click', function(e) {
        e.preventDefault();
        $('.site-mobile-navigation').addClass('active');
        $('body').addClass('menu-open');
    });

    // Menü kapatma
    $('#remove-megamenu').on('click', function(e) {
        e.preventDefault();
        $('.site-mobile-navigation').removeClass('active');
        $('body').removeClass('menu-open');
    });

    // Menü dışına tıklayınca kapatma
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.site-mobile-navigation, #show-megamenu').length) {
            $('.site-mobile-navigation').removeClass('active');
            $('body').removeClass('menu-open');
        }
    });

    // ESC tuşu ile kapatma
    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) { // ESC key
            $('.site-mobile-navigation').removeClass('active');
            $('body').removeClass('menu-open');
        }
    });
});
