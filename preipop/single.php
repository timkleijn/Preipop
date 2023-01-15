<?php
$GLOBALS['preipop_use_normal_header'] = true;
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
        <!--<div class="relative mx-auto pb-12 px-6 max-w-4xl">
            <div class="overflow-auto w-fit">
                <img src="../img/dr-justice.png" class=" object-cover mx-auto mb-4 max-w-4xl w-full">
            </div>
            <div class="text-white text-center md:text-left space-y-4 ">
                <h1 class="text-center text-4xl font-bold text-white mb-4">Persinformatie</h1>
                <p>Preipop is een gratis festival dat sinds 2007 jaarlijks in februari wordt gehouden op het pand van
                    Cleopatra. Preipop biedt een podium aan nieuw talent uit Nederland, en de omgeving van Groningen in
                    het bijzonder.</p>
                <p>Wat het festival bijzonder maakt is haar brede programmering. Van intieme singer/songwriter muziek
                    tot stampende rock, van relaxte jazz tot energieke ska: op Preipop vind je het allemaal. Naast
                    beginnend talent staan er op elke editie ook een aantal wat meer gevestigde namen. Zo speelden op de
                    allereerste editie The Heavens Devils, een band die al meerdere popprijzen heeft gewonnen. Andere
                    hoogtepunten waren o.a. the Swains (2008), A Silent Express (2010) en A Liquid Landscape (2011).</p>
                <p>Voor meer informatie kunt u contact opnemen via info@preipop.nl.</p>
            </div>
        </div>-->
        
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
