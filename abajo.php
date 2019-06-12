<footer class="page-footer font-small special-color-dark pt-4">

	<div class="container">

		<ul class="list-unstyled list-inline text-center">
			<li class="list-inline-item">
				<a class="btn-floating btn-fb mx-1" href="https://www.facebook.com">
					<i class="fab fa-facebook-f"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-tw mx-1" href="https://twitter.com/Powershoot19">
					<i class="fab fa-twitter"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-gplus mx-1" href="https://www.google.es">
					<i class="fab fa-google-plus-g"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-li mx-1" href="https://www.linkedin.com/m/login/">
					<i class="fab fa-linkedin-in"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-dribbble mx-1" href="https://github.com/javigandia99/TiendaOnlinePHP_AJAX_JS">
					<i class="fab fa-dribbble"> </i>
				</a>
			</li>
		</ul>

	</div>

	<div class="footer-copyright text-center py-3">© 2019 Copyright:
		<a href="#inicio">DENVER</a>
	</div>


</footer>
<script>
	window.onscroll = function() {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
			document.getElementById("subir").style.display = "block";
		} else {
			document.getElementById("subir").style.display = "none";
		}
	}

	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>