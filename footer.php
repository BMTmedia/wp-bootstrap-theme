<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
		</div><!-- .row -->

	</div><!-- .span12 -->
	</div><!-- .row -->
	</div><!-- #middle-zone -->
	
	<div class="row">
	<div class="span12">

	<div id="footer-zone" role="contentinfo">
		<div class="row">
			<div class="span12">
				<?php
					/* A sidebar in the footer? Yep. You can can customize
					 * your footer with four columns of widgets.
					 */
					get_sidebar( 'footer' );
				?>			
			</div>
		</div>
		<div class="row">
			<div id="footer-menu" class="span12">
			<?php wp_nav_menu( 
				array(
					'menu' => 'Footer Menu', 
					'container' => '', 
					'items_wrap' => '<ul id="%1$s" class="nav nav-pills">%3$s</ul>',
					'walker' => new Bootstrap_Walker_Nav_Menu()
					)
				); 
			?>
			</div>		
		</div>
		<div class="credits-sector">
		<div class="row">
			<div class="span6">
				<div id="site-info">
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div><!-- #site-info -->			
			</div>
			<div class="span6">
				<div id="site-generator" class="pull-right">
					<?php do_action( 'twentyten_credits' ); ?>
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a>
				</div><!-- #site-generator -->
			</div>
		</div>
		</div>
	</div><!-- #footer-zone -->
	</div><!-- .span12 -->
	</div><!-- .row -->

</div><!-- #wrapper .container -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
