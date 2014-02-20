// jquery wpress nav menu

(function($) {
	$.NavMenu = {};

	$.fn.NavMenu = function (options) {
		options = options || {};

		var timeout = {};

		var hideAllMenus = function() {
			$(".nav-menu-showing").each(function()
			{
				hideMenu($(this));
			});
		};

		var hideMenu = function($elem) {
			var subMenu = $elem.find(".sub-menu");
			$elem.removeClass("nav-menu-showing");
			subMenu.hide();
		};

		var openMenu = function($elem) {
			hideAllMenus();
			if(!$elem.hasClass("nav-menu-showing")) {
				var $subMenu = $elem.find(".sub-menu");
				$subMenu.css("display", "block");
				positionSubMenuToParent($elem, $subMenu);
				$elem.addClass("nav-menu-showing");
				$subMenu.find("li").css("display", "block");

				$subMenu.hover(function() {
					clearTimeout(timeout);
				}, function() {
					timeout = setTimeout(function() {
						hideMenu($elem);
					}, 50);
				});

				$subMenu.show();
			}
		};

		var positionSubMenuToParent = function($parent, $subMenu) {
			$subMenu.css("position", "absolute");

			var parentPosition = $parent.offset();

			var menuTop = parentPosition.top + $parent.height();
			var menuLeft = parentPosition.left;

			$subMenu.offset({ top : menuTop, left: menuLeft });
		};

		$( "body" ).on("click", function() {
			hideAllMenus();
		});

		return $(this).each(function() {
			$(this).css("display", "inline-block");

			$(this).find(".sub-menu").hide();

			$(this).hover(function(e) {
				clearTimeout(timeout);
				$that = $(this);
				if($that.hasClass("menu-item-has-children")) {
					openMenu($that);
				}
			}, function() {
				timeout = setTimeout(function() {
						hideMenu($that);
					}, 50);
			});
		})
	}
}
)( jQuery );


( function( $ ) {
    // initalization code.
    $(document).on("ready", function() {
    	$("#menu-main-navigation li").NavMenu();
	});

} )( jQuery );