	<script type="text/javascript">

		var Site = {
			basePath: document.body.getAttribute('data-base-url'),
			userAgent: navigator.userAgent,
			platform: navigator.platform
		};

	</script>


	<? // grab hosted version of jQuery, fall back to our version ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/libs/min/jquery.min.js"><\/script>')</script>

	<? // Debug with expanded versions and change to minified versions when going live ?>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/script.js"></script>

</body>
</html>