<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
		<div class="site-info">
			<div class="site-name">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
						<?php if ( is_front_page() && ! is_paged() ) : ?>
							<?php bloginfo( 'name' ); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div><!-- .site-name -->
			<div class="powered-by">
				<?php
				printf(
					/* translators: %s: WordPress. */
					esc_html__( 'Proudly powered by %s.', 'twentytwentyone' ),
					'<a href="' . esc_attr__( 'https://wordpress.org/', 'twentytwentyone' ) . '">WordPress</a>'
				);
				?>
			</div><!-- .powered-by -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script>
function myFunction() {
var downloadButton = document.getElementById("download");
var counter = 60;
var newElement = document.createElement("p");
newElement.innerHTML = "You are left with 60 seconds.";
var id;
downloadButton.parentNode.replaceChild(newElement, downloadButton);
id = setInterval(function() {
counter--;
if(counter < 0) {
newElement.parentNode.replaceChild(downloadButton, newElement);
clearInterval(id);
} else {
newElement.innerHTML = "<span style='color: white;'>You are left with " + counter.toString() + " seconds.</span>";
}}, 1000);
}

function myFunction1() {
var downloadButton1 = document.getElementById("download1");
var counter1 = 60;
var newElement1 = document.createElement("p");
newElement1.innerHTML = "You are left with 60 seconds.";
var id1;
downloadButton1.parentNode.replaceChild(newElement1, downloadButton1);
id1 = setInterval(function() {
counter1--;
if(counter1 < 0) {
newElement1.parentNode.replaceChild(downloadButton1, newElement1);
clearInterval(id1);
} else {
newElement1.innerHTML = "<span style='color: white;'>You are left with " + counter1.toString() + " seconds.</span>";
}}, 1000);
}
function myFunction2() {
var downloadButton2 = document.getElementById("download2");
var counter2 = 60;
var newElement2 = document.createElement("p");
newElement2.innerHTML = "You are left with 60 seconds.";
var id2;
downloadButton2.parentNode.replaceChild(newElement2, downloadButton2);
id2 = setInterval(function() {
counter2--;
if(counter2 < 0) {
newElement2.parentNode.replaceChild(downloadButton2, newElement2);
clearInterval(id2);
} else {
newElement2.innerHTML = "<span style='color: white;'>You are left with " + counter2.toString() + " seconds.</span>";
}}, 1000);
}
function myFunction3() {
var downloadButton3 = document.getElementById("download3");
var counter3 = 60;
var newElement3 = document.createElement("p");
newElement3.innerHTML = "You are left with 60 seconds.";
var id3;
downloadButton3.parentNode.replaceChild(newElement3, downloadButton3);
id3 = setInterval(function() {
counter3--;
if(counter3 < 0) {
newElement3.parentNode.replaceChild(downloadButton3, newElement3);
clearInterval(id3);
} else {
newElement3.innerHTML = "<span style='color: white;'>You are left with " + counter3.toString() + " seconds.</span>";
}}, 1000);
}
function myFunction4() {
var downloadButton4 = document.getElementById("download4");
var counter4 = 60;
var newElement4 = document.createElement("p");
newElement4.innerHTML = "You are left with 60 seconds.";
var id4;
downloadButton4.parentNode.replaceChild(newElement4, downloadButton4);
id4 = setInterval(function() {
counter4--;
if(counter4 < 0) {
newElement4.parentNode.replaceChild(downloadButton4, newElement4);
clearInterval(id4);
} else {
newElement4.innerHTML = "<span style='color: white;'>You are left with " + counter4.toString() + " seconds.</span>";
}}, 1000);
}
function myFunction6() {
var downloadButton6 = document.getElementById("download6");
var counter6 = 60;
var newElement6 = document.createElement("p");
newElement6.innerHTML = "You are left with 60 seconds.";
var id6;
downloadButton6.parentNode.replaceChild(newElement6, downloadButton6);
id6 = setInterval(function() {
counter6--;
if(counter6 < 0) {
newElement6.parentNode.replaceChild(downloadButton6, newElement6);
clearInterval(id6);
} else {
newElement6.innerHTML = "<span style='color: white;'>You are left with " + counter6.toString() + " seconds.</span>";
}}, 1000);
}
function myFunction7() {
var downloadButton7 = document.getElementById("download7");
var counter7 = 60;
var newElement7 = document.createElement("p");
newElement7.innerHTML = "You are left with 60 seconds.";
var id7;
downloadButton7.parentNode.replaceChild(newElement7, downloadButton7);
id7 = setInterval(function() {
counter7--;
if(counter7 < 0) {
newElement7.parentNode.replaceChild(downloadButton7, newElement7);
clearInterval(id7);
} else {
newElement7.innerHTML = "<span style='color: white;'>You are left with " + counter7.toString() + " seconds.</span>";
}}, 1000);
}

</script>

</body>
</html>
