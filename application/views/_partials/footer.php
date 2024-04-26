<footer class="footer-distributed">

	<div class="footer-left">
		<img src="<?= base_url('/assets/img/UBI.png') ?>">


		<p class="footer-links">
			<a href="#">Home</a>
			|
			<a href="#">Blog</a>
			|
			<a href="#">About</a>
			|
			<a href="#">Contact</a>
		</p>

		<p class="footer-company-name">© 2024 TI23D</p>
	</div>

	<div class="footer-center">
		<div>
			<i class="fa fa-map-marker"></i>
			<p>Jl.Boulevard Raya Barat Blok RGA no.30 Ruko Grand Galaxy City</p>
		</div>

		<div>
			<i class="fa fa-phone"></i>
			<p>082324617672</p>
		</div>
		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="#">rizkon86system@gmail.com</a></p>
		</div>
	</div>
	<div class="footer-right">
		<p class="footer-company-about">
			<span>Tentang Kami</span>
			Kami menyediakan artikel artikel berkualitas untuk menunjang kegiatas pembelajaran umat manusia.
		</p>
		<div class="footer-icons">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</footer>

<script type="text/javascript">
	// deklarasi tombol dan menu
	const tombol = document.querySelector(".tombol");
	const menu = document.querySelector(".menu");

	// membuat event click
	// pada saat tombol di click, tambahkan class aktif pada class menu
	// saat diklik lagi, maka class aktif dihilangkan dari class menu (toggle)
	tombol.addEventListener("click", () => {
		// console.log("Tombol hamburger di klik!");
		menu.classList.toggle("aktif");
	});
</script>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>