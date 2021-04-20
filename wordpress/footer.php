<!-- footer -->
<footer class="footer">
	<div class="containerTwo">

		<div class="footer__wrapper">
			<ul class="footer__list">
				<li class="footer__item">
					<a class="footer__link" href="#" >How it Works</a>
				</li>

				<li class="footer__item">
					<a class="footer__link" href="#" >About Us</a>
				</li>

				<li class="footer__item">
					<a class="footer__link" href="#" >FAQ</a>
				</li>

				<li class="footer__item">
					<a class="footer__link" href="#" >Contact Us</a>
				</li>

				<li class="footer__item">
					<a class="footer__link" href="#" >Privacy Policy</a>
				</li>
			</ul>

		<a href="<?php home_url();?>">
			<svg class="header__logo logo" width="62" height="28" viewBox="0 0 62 28">
				<use xlink:href=" <?php echo IMAGES_DIR;?>/svg/sprite.svg#logo"></use>
			</svg>
		</a>

		</div> <!-- footer__row -->

	</div> <!-- container -->
</footer> <!-- footer -->
<?php wp_footer();?>
</body>

</html>