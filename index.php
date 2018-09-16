<?php
/**
 * The main template file for homepage
 */
get_header(); ?>

    <main class="content_wrapper">
        <div class="section news footer" id="fullpage">
            <div class="container">

                <h2>gsfdgsfg<?php wp_title(''); ?></h2>

                <div class="columns">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="column3">
                            <a href="#news-<?php the_ID(); ?>" class="popup">
                                <?php the_post_thumbnail('news-thumb'); ?>
                                <span class="visible"><?php the_title(); ?></span>
                                <span class="hidden btn">Подробнее</span>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>

    </main>
<?php while (have_posts()) : the_post(); ?>
    <div id="news-<?php the_ID(); ?>" class="popup-container disclaimer">
        <div class="popup-overlay"></div>
        <div class="popup-content">
            <div class="popup-close"></div>
            <div class="popup-text">
                <h2><?php the_title(); ?></h2>
                <div class="popup-text-content">
                    <?php the_content(''); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer();
