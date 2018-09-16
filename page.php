<?php
/**
 * The template for displaying all pages
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

    <main class="content_wrapper" id="fullpage">
        <div class="section contacts footer">
            <div class="container">
                <div class="contacts-form">
                    <h2><?php wp_title(''); ?></h2>

                    <?php while (have_posts()) : the_post();
                        the_content('');
                    endwhile; ?>
                    <!--

                    <form>
                        <input placeholder="Ведите имя" type="text">
                        <input placeholder="Ведите телефон" type="tel">
                        <input placeholder="Ведите E-mail" type="email">
                        <textarea placeholder="Сообщение"></textarea>
                        <button type="submit" class="btn btn-primary">
                            <span class="right-corner"></span>
                            <span class="right-corner small"></span>
                            Отправить
                            <span class="left-corner"></span>
                            <span class="left-corner small"></span>
                        </button>
                    </form>

                    -->
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
