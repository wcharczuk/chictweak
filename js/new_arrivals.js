(function ($) {
	$.get("", function(data) {
		var $document = $(data);

		$document.find("a.modelimg").each(function() {
			alert($(this).attr("src"));
		});

	});
})( jQuery );