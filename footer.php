		<footer id="colophon" class="site-footer row" role="contentinfo">
			<div class="col-xs-9 col-md-9 col-lg-9">
				<span class="cc-date">&copy; <?php echo date("Y"); ?></span>
				<a href="www.chictweak.com" target="_blank">Home</a>
					- <a href="www.chictweak.com/privacy" target="_blank">Privacy Policy</a>
					- <a href="www.chictweak.com/privacy" target="_blank">Terms of Use</a>
				</div>
			</div>
			<div class="col-xs-3 col-md-3 col-lg-3"></div>
		</footer>
	</div> <!-- #page -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript">
(function($) {
	$.get( "<?php echo get_template_directory_uri(); ?>/new_arrivals.php", function( response ) {

		$.each(response, function(key, val) {
			var img = document.createElement("img");
			img.src = val.img_url;
			var a = document.createElement("a");
			a.href = val.link_url;
			$(a).attr("target", "_blank");
			a.appendChild(img);
			var li = document.createElement("li");
			li.appendChild(a);
			document.getElementById("gallery").appendChild(li);
		});

		$("#gallery").cycle({ next: "#gallery-next", prev: "#gallery-previous" });

	}).fail( function(response) {
		$("#new-arrivals").hide();
	});

	$("#mailinglist_submit").on("click", function() {

		var data = {};
		data.eid = $("#mailinglist_eid").val();
		data.firstname = "from_blog";
		data.lastname = "from_blog";

		var url = "<?php echo get_template_directory_uri(); ?>/mailinglist.php";
		$.ajax({
	       	url : url,
	       	data: data,
	       	method: "POST"
		});

		$("#mailinglist_eid").val("");
		return false;
	});

	$("img[on-hover-src]").hover(function() {
		$(this).attr("off-hover-src", $(this).attr("src"));
		$(this).attr("src", $(this).attr("on-hover-src"));
	}, function() {
		$(this).attr("src", $(this).attr("off-hover-src"));
	});
})(jQuery);
</script>
</body>
</html>