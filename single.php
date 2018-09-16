<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>
    <div class="inner-blog_txt">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="inner-top">
                        <h3><?php wp_title(''); ?></h3>
                    </div>
                </div>
            </div>

            <div class="inner-blog_txt-content">
                <div class="row">
                    <div class="inner-blog_txt_box_1 clearfix">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <?php while (have_posts()) : the_post();
                                the_content('');
                            endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
