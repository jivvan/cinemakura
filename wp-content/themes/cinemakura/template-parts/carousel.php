<section id="image-carousel" class="splide" aria-label="Beautiful Images">
    <div class="splide__track">
        <ul class="splide__list">
            <?php if ($posts) {
                foreach ($posts as $post) :
                    setup_postdata($post); ?>
                    <?php
                    $movie_name = get_post_meta(get_the_ID(), 'movie_name', true);
                    $release_date =  get_post_meta(get_the_ID(), 'release_date', true);
                    $poster =  get_post_meta(get_the_ID(), 'poster', true);
                    ?>
                    <li class="splide__slide">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo pods_image($poster, 'default'); ?>
                        </a>
                    </li>
            <?php
                endforeach;
                wp_reset_postdata();
            }
            ?>
        </ul>
    </div>
</section>
<style>
    .splide__slide img {
        width: 100%;
        height: 300px;
        object-fit: contain;
    }
</style>
<script>
    new Splide('#image-carousel', {
        type: 'loop',
        perPage: 5,
        breakpoints: {
            1100: {
                perPage: 3,
            },
            600: {
                perPage: 1,
            }
        },
    }).mount();
</script>