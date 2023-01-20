<?php
get_header();
?>
		<?php
	if (have_posts()) {
		while(have_posts()) {
			the_post();
		?>
	<!-- Title -->
	<?php
	if (!is_front_page()) {
	?>
	<h1 class="text-center text-4xl font-bold text-white mb-4"><?php the_title(); ?></h1>
	<?php
	}
	?>

        <!-- Image -->


        <!-- Article with image -->
        <div class="relative mx-auto pb-12 px-6 max-w-4xl">
            <div class="overflow-auto w-fit">
	    <?php the_post_thumbnail( 'large' ); ?>
            </div>
        </div>
        
        <!-- Text section -->
        <section class="max-w-4xl mx-auto">

            <div class="text-white text-center md:text-left space-y-4 mb-12 px-6">

		<?php
			the_content();
		?>
		</div>
        </section>

		<?php
		}
}
	?>

            
	

<?php
get_footer();
?>
