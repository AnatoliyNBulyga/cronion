<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <main class="content_wrapper" id="fullpage">
        <div class="section contacts footer">
            <div class="container">
                <div class="contacts-form">
                    <h2><span>404</span></h2>
                    <p><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></p>
                </div>

                <footer style="position: relative; bottom: 0; padding: 20px 0">
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
                            <?php endif;
                            if (get_field('additional_link_text', 6)) :  ?>
                                <li><a target="_blank" href="<?php the_field('additional_link_url', 6) ?>"><?php the_field('additional_link_text', 6) ?></a></li>
                            <?php endif; ?>
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
