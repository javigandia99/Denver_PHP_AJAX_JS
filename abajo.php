<footer class="page-footer font-small unique-color-light" style="background-color:lightseagreen;">
	<div class="footer-copyright text-center py-3" id="copyright">© 2019 Copyright:
		<a href="index.php"> Javier Gandia Calderón</a>
	</div>
</footer>
<script>
// cuando baja la pagina 250px aparece el boton
		window.onscroll = function() {scrollFunction()};

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
<script src="bootstrap/js/popper.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
