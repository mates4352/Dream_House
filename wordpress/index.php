<?php get_header()?>
<!-- content -->
	<section class="home">
	<div class="containerTwo">
		<h1 class="header__title">Build Your Dream <span class="title__strong">House</span></h1>
		<div class="home__wrapper">

			<div class="home__column">
				<p class="home__text text">The first and most trusted marketplace of design & build house in The World. 100% guaranteed Build safe, comfortable and transparent with a project management for the best result</p>
				<button class="home__btn btn">Free Consultation</button>
			</div>

				<picture><source srcset=" <?php echo IMAGES_DIR;?>home/img.webp" type="image/webp"><img class="home__img" src=" <?php echo IMAGES_DIR;?>home/img.jpg" alt="home"></picture>

		</div>
	</div>
</section>
	<section class="room">
	<div class="containerTwo">
		<h2 class="room__title title">Build professional valuable room for you </h2>

		<div  class="room__wrapper">

		<?php foreach(getGallery() as $gallery):?>
			<a class="roow__column" data-fslightbox="gal" href="<?php echo IMAGES_DIR; ?>/room/img1.jpg">
				<picture><source srcset="<?php echo $gallery['img']?>" type="image/webp"><img class="room__img" src="<?php echo $gallery['img']?>" alt=""></picture>
				<svg class="room__icon" viewBox="0 0 15 15">
					<use xlink:href="<?php echo IMAGES_DIR;?>/svg/sprite.svg#Search"></use>
				</svg>
				<div class="room__bg"></div>
			</a>
		<?php endforeach;?>
		</div>

	</div>
</section>
	<section class="archmove">
	<div class="containerTwo">
		<h2 class="archmove__title title">Build your needs with Archmove</h2>

		<div class="archmove__wrapper">

			<picture><source srcset=" <?php echo IMAGES_DIR;?>archmove/img.webp" type="image/webp"><img class="archmove__img" src=" <?php echo IMAGES_DIR;?>archmove/img.jpg" alt="tovar"></picture>

			<div class="archmove__column">

				<div class="archmove__caption">
					<h5 class="archmove__caption-title">100% guaranteed project completion</h5>
					<p class="archmove__text text">Build safe, comfortable and transparent with a project management
						application with a joint account.</p>
				</div>

				<div class="archmove__caption">
					<h5 class="archmove__caption-title">No additional fees</h5>
					<p class="archmove__text text">There are no hidden costs. The value of the offer you get is the value you
						paid.</p>
				</div>

				<div class="archmove__caption">
					<h5 class="archmove__caption-title">Get escort from the Team</h5>
					<p class="archmove__text text">Monitor reports from the Arsitag team who check directly in the field.</p>
				</div>

				<button class="archmove__btn btn">CONSULTATION</button>

			</div>

		</div>

	</div>
</section>
	<section class="review">
	<div class="containerTwo">
		<h2 class="review__title title">Sound Too Good To Be True?</h2>
		<div class="swiper-container">
			<div class="swiper-wrapper">

				<div class="swiper-slide">
					<article class="review__article">
						<p class="review__text">
							We just wanted to thank you for this fantastic website! We are so grateful for being able to
							advertise our Petite cabin and receive feedback from people from all over the U.S. and even
							further.
						</p>
						<cite class="review__name"><span class="review__strong"> Adam Morph </span>— CEO A lfatech</cite>
					</article>
				</div>

				<div class="swiper-slide">
					<article class="review__article">
						<p class="review__text">
							We just wanted to thank you for this fantastic website! We are so grateful for being able to
							advertise our Petite cabin and receive feedback from people from all over the U.S. and even
							further.
						</p>
						<cite class="review__name"><span class="review__strong"> Adam Morph </span>— CEO A lfatech</cite>
					</article>
				</div>

				<div class="swiper-slide">
					<article class="review__article">
						<p class="review__text">
							We just wanted to thank you for this fantastic website! We are so grateful for being able to
							advertise our Petite cabin and receive feedback from people from all over the U.S. and even
							further.
						</p>
						<cite class="review__name"><span class="review__strong"> Adam Morph </span>— CEO A lfatech</cite>
					</article>
				</div>

			</div>

			<div class="swiper__buttons">
				<div class="swiper-button-prev">
					<svg width="20" height="20" viewBox="0 0 20 20">
						<use xlink:href="./ <?php echo IMAGES_DIR;?>review/arrow.svg#arrow"></use>
					</svg>
				</div>
				
				<div class="swiper-button-next">
					<svg width="20" height="20" viewBox="0 0 20 20">
						<use xlink:href="./ <?php echo IMAGES_DIR;?>review/arrow.svg#arrow"></use>
					</svg >
				</div>
			</div>
		

		

		</div>
	</div>
</section>
	<section class="consultation">
	<div class="consultation__container containerTwo">
		<div class="consultation__wrapper">
			<h2 class="consultation__title title">Realize your dream project with <span class="consultation__strong">Archmove</span></h2>
			<button class="consultation__btn btn">FREE CONSULTATION</button>
		</div>
	</div>
</section>
	<section class="partners">
	<div class="partners__container containerTwo">
		<h2 class="partners__title title">Our Partners</h2>
		<div class="partners__wrapper">
			<picture><source srcset=" <?php echo IMAGES_DIR;?>partners/icon1.svg" type="image/webp"><img class="partners__img" src=" <?php echo IMAGES_DIR;?>partners/icon1.svg" alt="" ></picture>
			<picture><source srcset=" <?php echo IMAGES_DIR;?>partners/icon2.svg" type="image/webp"><img class="partners__img" src=" <?php echo IMAGES_DIR;?>partners/icon2.svg" alt="" ></picture>
			<picture><source srcset=" <?php echo IMAGES_DIR;?>partners/icon3.svg" type="image/webp"><img class="partners__img" src=" <?php echo IMAGES_DIR;?>partners/icon3.svg" alt="" ></picture>
			<picture><source srcset=" <?php echo IMAGES_DIR;?>partners/icon4.svg" type="image/webp"><img class="partners__img" src=" <?php echo IMAGES_DIR;?>partners/icon4.svg" alt="" ></picture>
			<picture><source srcset=" <?php echo IMAGES_DIR;?>partners/icon5.svg" type="image/webp"><img class="partners__img" src=" <?php echo IMAGES_DIR;?>partners/icon5.svg" alt="" ></picture>
		</div>
	</div>
</section>
<?php get_footer()?>
