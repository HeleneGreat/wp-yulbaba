( function() {
    var nav = document.getElementById( 'site-navigation' ), img, menu;
    if ( ! nav ) {
        return;
    }

    img = nav.getElementsByTagName( 'img' )[0];
    menu   = nav.getElementsByTagName( 'ul' )[0];
    if ( ! img ) {
        return;
    }

    // Hide img if menu is missing or empty.
    if ( ! menu || ! menu.childNodes.length ) {
        img.style.display = 'none';
        return;
    }

    img.onclick = function() {
        if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
            menu.className = 'nav-menu';
        }

        if ( -1 !== img.className.indexOf( 'toggled-on' ) ) {
            img.className = img.className.replace( ' toggled-on', '' );
            menu.className = menu.className.replace( ' toggled-on', '' );
        } else {
            img.className += ' toggled-on';
            menu.className += ' toggled-on';
        }
    };
} )(jQuery);