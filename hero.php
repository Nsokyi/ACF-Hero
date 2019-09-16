

<section class="hero is-fullheight-with-navbar is-large is-bold is-primary has-background">
<?php 
		$image = get_field('background_image');	
		if( $image ): ?>
			<img alt="<?php echo $image['title']; ?>" class="hero-background is-transparent" src="<?php echo $image['url']; ?>">
	<?php endif; ?>

		<div class="hero-body">
			<div class="container">
			<h1 class="title"><?php the_field('headline'); ?></h1>
			<p class="subtitle"><?php the_field('paragraph'); ?></p>

			<?php if( have_rows('large_button') ): ?>
			<?php while( have_rows('large_button') ): the_row(); ?>
							<a class="button is-primary" href="<?php the_sub_field('button_link');?>"><?php the_sub_field('button_title');?></a>
			<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
		
</section>
