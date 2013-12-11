		<footer id="colophon" class="site-footer row" role="contentinfo">
			<div class="col-xs-6 col-md-6">&copy; <?php echo date("Y"); ?></div>
			<div class="col-xs-6 col-md-6">
				<a href="www.chictweak.com" target="_blank">Home</a>
				- <a href="www.chictweak.com/privacy" target="_blank">Privacy Policy</a>
				- <a href="www.chictweak.com/privacy" target="_blank">Terms of Use</a>
			</div>
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

		$("#gallery").cycle();
	}).fail( function(response) {
		$("#new-arrivals").hide();
	});
})(jQuery);
</script>
</body>
</html>