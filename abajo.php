<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

	<!-- Footer Elements -->
	<div class="container">

		<!-- Social buttons -->
		<ul class="list-unstyled list-inline text-center">
			<li class="list-inline-item">
				<a class="btn-floating btn-fb mx-1">
					<i class="fab fa-facebook-f"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-tw mx-1">
					<i class="fab fa-twitter"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-gplus mx-1">
					<i class="fab fa-google-plus-g"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-li mx-1">
					<i class="fab fa-linkedin-in"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-dribbble mx-1">
					<i class="fab fa-dribbble"> </i>
				</a>
			</li>
		</ul>
		<!-- Social buttons -->

	</div>
	<!-- Footer Elements -->

	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">© 2019 Copyright:
		<a href="#inicio">DENVER</a>
	</div>
	<!-- Copyright -->

</footer>
<script>
	// cuando baja la pagina 250px aparece el boton
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

	// cuando se pulsa el boton, hace el scroll hacia arriba
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