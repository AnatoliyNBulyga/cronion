<?php
/**
 * The template for displaying the footer
 */

?>
<div class="hidden">

<div id="nav" class="popup-container navigation zoom-anim-dialog">

    <div class="popup-content">
        <div class="popup-close mfp-close"></div>
        <div class="popup-text">
            <?php wp_nav_menu(array(
                'theme_location' => 'top',
            )); ?>
        </div>
    </div>
</div>

<?php if (have_rows('services-left', 6)):
    $count3 = 1;
    while (have_rows('services-left', 6)) : the_row(); ?>

        <div id="service-<?php echo $count3; ?>" class="zoom-anim-dialog">
            <div class="popup-content">
                <div class="popup-close mfp-close"></div>
                <div class="popup-text">
                    <?php the_sub_field('description', 6); ?>
                    <a href="<?php echo get_permalink(25); ?>" class="btn btn-primary"><span class="right-corner"></span><span class="right-corner small"></span>Заказать услугу<span class="left-corner"></span><span class="left-corner small"></span></a>
                </div>
                <?php
                $image = get_sub_field('image', 6);
                $size = 'service-thumb'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    ?>
                    <div class="popup-image">
                        <?php echo wp_get_attachment_image($image, $size); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php
        $count3++;
    endwhile;
endif; ?>
<?php if (have_rows('services-right', 6)):
$count4 = 10;
while (have_rows('services-right', 6)) : the_row(); ?>

    <div id="service-<?php echo $count4; ?>" class="zoom-anim-dialog">
        <div class="popup-overlay"></div>
        <div class="popup-content">
            <div class="popup-close mfp-close"></div>
            <div class="popup-text">
                <?php the_sub_field('description', 6); ?>
                </a>
            </div>
            <?php
            $image = get_sub_field('image', 6);
            $size = 'service-thumb'; // (thumbnail, medium, large, full or custom size)
            if ($image) {
                ?>
                <div class="popup-image">
                    <?php echo wp_get_attachment_image($image, $size); ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php
    $count4++;
endwhile;
endif; ?>
<div id="video" class="zoom-anim-dialog video">
    <div class="popup-overlay"></div>
    <div class="popup-content">
        <div class="popup-close mfp-close"></div>
        <div class="popup-video">
            <?php the_field('video-code',6); ?>
        </div>
    </div>
</div>

<div id="disclaimer" class="disclaimer zoom-anim-dialog">
    <div class="popup-overlay"></div>
    <div class="popup-content">
        <div class="popup-close mfp-close"></div>
        <div class="popup-text">
            <h2><?php the_field('heading-dis', 6) ?></h2>
            
                <div class="popup-text-content">
                    <?php the_field('descr-dis', 6) ?>
                </div>
            
        </div>
    </div>
</div>

<div id="legal" class="popup-container zoom-anim-dialog legal">
    <div class="popup-overlay"></div>
    <div class="popup-content">
        <div class="popup-close mfp-close"></div>
        <div class="popup-text-content">
            <div class="columns">
                <div class="col5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/legal/icon1.png" width="73" height="73" alt="icon1">
                    <h4>Разрешено по правилам</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/legal/flags1.png" width="130" height="150" alt="flag1">
                </div>
                <div class="col5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/legal/icon2.png" width="73" height="73" alt="icon2">
                    <h4>Запрещено</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/legal/flags2.png" width="130" height="255" alt="flag2">
                </div>
                <div class="col5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/legal/icon3.png" width="73" height="73" alt="icon3">
                    <h4>Налог</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/legal/flags3.png" width="130" height="86" alt="flag3">
                </div>
                <div class="col5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/legal/icon4.png" width="73" height="73" alt="icon4">
                    <h4>Не определись</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/legal/flags4.png" width="130" height="252" alt="flag4">
                </div>
                <div class="col5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/legal/icon5.png" width="73" height="73" alt="icon1">
                    <h4>Все можно</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/legal/flags5.png" width="130" height="83" alt="flag5">
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php wp_footer(); ?>
</body>
</html>
