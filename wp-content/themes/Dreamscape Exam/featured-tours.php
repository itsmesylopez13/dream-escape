
<!-- FEATURED TOURS -->
<section class="featured-tours-section">
	<article>
		<div class="title">
			<h3>Featured Tours</h3>
		</div>
		<div class="sub-title">
			<h5>Explore the world with Intense! We offer you a vast variety of tours of all types featuring both exotic and already well-known destinations, some of which are listed below.</h5>
		</div>	
		<div class="featured-tools-item">
			<!-- FIRST TOUR -->

			<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="item">
				<figure>
					<img src="<?php bloginfo('template_url');?>/img/featured/Image 21.png">
				</figure>
				<h5>Kamalame Cay Resort</h5>
				<p>Kamalame Cay, The Bahamas</p>
				<p><button class="btn"><i class="fa fa-paper-plane "></i> READ MORE</button></p>
			</div>	
				<?php endwhile; ?>

<?php endif; ?>

		</div>


	</article>	
</section>	
<!-- END -->