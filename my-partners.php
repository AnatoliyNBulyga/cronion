<?php
/**
 Template name: Partners
 */

get_header(); ?>

    <div id="bgndVideo" class="player"
    data-property="{
    videoURL: 'https://youtu.be/yEpD-g3WcLk',
    containment: 'body',
    autoPlay: true,
    mute: false,
    startAt:0,
    opacity:1
    }">     
    </div>

    <main class="content_wrapper">
        <div class="section news no-shadow footer" id="fullpage">
            <div class="container">

                <div class="columns">
                    <div class="column1-3">
                        <h2><?php wp_title(''); ?></h2>
                        <div class="partner-details">
                            <?php
                                $count = 0;
                            $args = array(
                                'post_type' => 'partners',
                                'orderby' => 'date',
                                'posts_per_page' => -1
                            );
                            $partners_query = new WP_Query($args);
                            if ( $partners_query->have_posts() ) {
                            while ($partners_query->have_posts()) {
                                $partners_query->the_post(); ?>
                            <div id="partner-<?php the_ID(); ?>" <?php if ($count < 1) : ?> class="active" <?php endif; ?>>
                                <h4><?php the_title(''); ?></h4>
                                <?php the_content(''); ?>
                            </div>
                            <?php
                                $count++;
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="column2-3">
                        <div class="slogan"><?php the_field('slogan', 27) ?></div>
                        <div class="partners-slider">

                            <div class="partners-slide">
                                <?php
                                $counter = 0;
                                $args2 = array(
                                    'post_type' => 'partners',
                                    'orderby' => 'date',
                                    'posts_per_page' => -1
                                );
                                $partners_query2 = new WP_Query($args2);
                                if ($partners_query2->have_posts()) {
                                    while ($partners_query2->have_posts()) {
                                $partners_query2->the_post();
                                        if ($counter == 15 || $counter == 30 || $counter == 45 || $counter == 60 || $counter == 75) { ?>
                            </div>
                            <div class="partners-slide">
                                        <?php }
                                        ?>
                                        <a href="#partner-<?php the_ID(); ?>"
                                           class="btn <?php if ($counter < 1) : ?> active <?php endif; ?>">
                                            <span class="right-corner small"></span>
                                            <?php the_post_thumbnail('partners-thumb'); ?>
                                            <span class="left-corner small"></span>
                                        </a>
                                        <?php
                                        $counter++;
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <footer>
                    <nav class="footer-left">
                        <ul>
                            <?php if (get_field('twitter', 6)) : ?>
                                <li><a target="_blank" href="<?php the_field('twitter', 6) ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social/twitter.png" width="20" height="18" alt="twitter"></a></li>
                            <?php endif;
                            if (get_field('instagram', 6)) :  ?>
                                <li><a target="_blank" href="<?php the_field('instagram', 6) ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.png" width="20" height="20" alt="instagram"></a></li>
                            <?php endif;
                            if (get_field('facebook', 6)) :  ?>
                                <li><a target="_blank" href="<?php the_field('facebook', 6) ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.png" width="12" height="18" alt="facebook"></a></li>
                            <?php endif;
                            if (get_field('medium', 6)) :  ?>
                                <li><a target="_blank" href="<?php the_field('medium', 6) ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social/medium.png" width="20" height="18" alt="medium"></a></li>
                            <?php endif;
                            if (get_field('telegram', 6)) :  ?>
                                <li><a target="_blank" href="<?php the_field('telegram', 6) ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social/telegram.png" width="20" height="20" alt="telegramm"></a></li>
                            <?php endif;?>
                        </ul>
                    </nav>
                    <nav class="footer-right">
                        <ul>
                            <?php if (get_field('phone', 6)) : ?>
                                <li class="tel"><a href="tel:+<?php the_field('phone_parsed', 6); ?>"><?php the_field('phone', 6); ?></a></li>
                            <?php endif; ?>
                            <?php if (get_field('email', 6)) : ?>
                                <li class="emailer"><a href="mailto:<?php the_field('email', 6); ?>"><?php the_field('email', 6); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </footer>
            </div>
        </div>

    </main>

<?php get_footer();
