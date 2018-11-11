<?php
/**
 * Template part for displaying posts.
 *
 * @package Azalea
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			jgtazalea_entry_category();
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
		<div class="entry-meta">
			<?php
				jgtazalea_posted_on();
				edit_post_link( esc_html__( 'Edit', 'azalea' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<?php jgtazalea_post_thumbnail(); ?>
	<div class="entry-content">
		<?php
			if ( is_search() || ( get_theme_mod( 'jgtazalea_auto_excerpt' ) && ! is_singular() ) ) {
				the_excerpt();
			} else {
				the_content( esc_html__( 'Read More', 'azalea' ) );
				wp_link_pages( array(
					'before'      => '<p class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'azalea' ) . '</span>',
					'after'       => '</p>',
					'link_before' => '<span class="page-link">',
					'link_after'  => '</span>'
				) );
			}
		?>
	</div><!-- .entry-content -->
	<div class="utilities group">
			<ul class="social">
				<li><a href="#" target="_blank" class="social-icon"><i class="fa fa-facebook"></i></a></li>
				<li><a href="href="#"" target="_blank" class="social-icon"><i class="fa fa-twitter"></i></a></li>
				<li><a href="href="#"" target="_blank" class="social-icon"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="href="#"" target="_blank" class="social-icon"><i class="fa fa-pinterest"></i></a></li>
			</ul>
	</div>
	<?php
	if ( is_single() && ! is_attachment() && get_theme_mod( 'jgtazalea_show_author_box' ) ) :
		get_template_part( 'template-parts/biography' );
	endif;
	?>
</article><!-- #post-## -->

<?php jgtazalea_entry_footer(); ?>
<br>