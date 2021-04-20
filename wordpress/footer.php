<!-- footer -->
<footer class="footer">
	<div class="containerTwo">
		<?php wp_nav_menu(
					[
						'theme_location'  => 'footer_menu',
						'menu'            => false, 
						'container'       => false, 
						'menu_class'      => 'header__list', 
						'menu_id'         => false,
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					]
		); ?>
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