( function( $ ) {
	var body    = $( 'body' ),
	    _window = $( window );

	/**
	 * Adds a top margin to the footer if the sidebar widget area is higher
	 * than the rest of the page, to help the footer always visually clear
	 * the sidebar.
	 */
	$( function() {
		if ( body.is( '.sidebar' ) ) {
			var sidebar   = $( '#secondary .widget-area' ),
			    secondary = ( 0 == sidebar.length ) ? -40 : sidebar.height(),
			    margin    = $( '#tertiary .widget-area' ).height() - $( '#content' ).height() - secondary;

			if ( margin > 0 && _window.innerWidth() > 999 )
				$( '#colophon' ).css( 'margin-top', margin + 'px' );
		}
	} );

	$("#site-navigation ul.nav-menu li.menu-item").on("click", function() {
		$(this).parent().find("ul.sub-menu").hide();
		var $menu = $(this).find("ul.sub-menu");
		$menu.show();
		$menu.css("display", "block");
		$(this).addClass("menu-open");
		return !$(this).hasClass("menu-item-has-children");
	})
} )( jQuery );