<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cinemakura
 */

?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php if ( 'movie' === get_post_type() ) : ?>
                <a href=<?php echo get_permalink();?>>
                <div class="movie_card">
                    <?php
            $movie_name =  get_post_custom_values('movie_name')[0];
            $release_date =  get_post_custom_values('release_date')[0];
            $poster =  get_post_custom_values('poster')[0];
			?>
            <marquee loop="" behavior="slide" direction="left">

                <h3><?php echo $movie_name?></h3>
            </marquee>
            <div class="w-90">
                <?php echo pods_image($poster, 'default'); ?>
            </div>
            </a>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->