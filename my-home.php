<?php
/**
 Template name: Home
 */

get_header(); ?>

    <div id="bgndVideo" class="player"
        data-property="{
        videoURL: 'https://youtu.be/0m59_WQV5As',
        containment: 'body',
        autoPlay: true,
        mute: false,
        startAt:0,
        opacity:1
        }">     
        </div> 

       

    <main class="content_wrapper" id="fullpage">

        <div class="section slide1" data-anchor="section1">
            <div class="container">
                <div class="content-wrapper">
                    <?php if (is_front_page()) : ?>
                        <a href="#section2" class="scroll"><img src="<?php echo get_template_directory_uri(); ?>/images/scroll.png" width="10" height="80" alt="scroll arrow"><span>Scroll</span></a>
                    <?php endif; ?>
                    
                    <?php while (have_posts()) : the_post();
                        the_content('');
                    endwhile; ?>
                </div>
            </div>   
        </div>

        <div class="section slide2 slide2-hidden-lg" data-anchor="section2">
            <div class="container">
               <div class="content-wrapper">
                  <h2><?php the_field('heading2') ?></h2>   
               </div> 
            </div>  
            <div class="slide"> 
                <div class="container">
                    <div class="content-wrapper">
                        <ol>
                            <li class="active">
                            <span class="btn btn-primary">
                                <span class="right-corner"></span>
                                <span class="right-corner small"></span>
                                1
                                <span class="left-corner"></span>
                                <span class="left-corner small"></span>
                            </span>
                                <?php the_field('block2-list1') ?>
                            </li>
                            <li class="notMobile">
                            <a href="#section2-1" class="btn btn-primary">
                                <span class="right-corner"></span>
                                <span class="right-corner small"></span>
                                2
                                <span class="left-corner"></span>
                                <span class="left-corner small"></span>
                            </a>
                            </li>
                            <li class="notMobile">
                            <a href="#section2-2" class="btn btn-primary">
                                <span class="right-corner"></span>
                                <span class="right-corner small"></span>
                                3
                                <span class="left-corner"></span>
                                <span class="left-corner small"></span>
                            </a>
                        </ol>
            
                    </div>    
                </div>
            </div>
            <div  class="slide ">
                <div class="container">
                    <div class="content-wrapper">
                        <ol>
                            <li class="active">
                            <span class="btn btn-primary">
                                <span class="right-corner"></span>
                                <span class="right-corner small"></span>
                                2
                                <span class="left-corner"></span>
                                <span class="left-corner small"></span>
                            </span>
                                <?php the_field('block2-list2') ?>
                            </li>
                            <li class="notMobile">
                            <a href="#section2-2" class="btn btn-primary">
                                <span class="right-corner"></span>
                                <span class="right-corner small"></span>
                                3
                                <span class="left-corner"></span>
                                <span class="left-corner small"></span>
                            </a>
                            </li>
                            <li class="notMobile">
                            <a href="#section2-3" class="btn btn-primary">
                                <span class="right-corner"></span>
                                <span class="right-corner small"></span>
                                4
                                <span class="left-corner"></span>
                                <span class="left-corner small"></span>
                            </a>
                            </li>
                        </ol>   
                    </div>  
                </div>
            </div>
            <div  class="slide">
                <div class="container">
                    <div class="content-wrapper">
                        <ol>
                            <li class="active">
                            <span class="btn btn-primary">
                                <span class="right-corner"></span>
                                <span class="right-corner small"></span>
                                3
                                <span class="left-corner"></span>
                                <span class="left-corner small"></span>
                            </span>
                                <?php the_field('block2-list3') ?>
                            </li>
                            <li class="notMobile">
                            <a href="#section2-3" class="btn btn-primary">
                                <span class="right-corner"></span>
                                <span class="right-corner small"></span>
                                4
                                <span class="left-corner"></span>
                                <span class="left-corner small"></span>
                            </a>
                            </li>
                        </ol>   
                    </div>  
                </div>
            </div>
            <div  class="slide">
                <div class="container">
                    <div class="content-wrapper">
                        <ol>
                            <li class="active">
                            <span class="btn btn-primary">
                                <span class="right-corner"></span>
                                <span class="right-corner small"></span>
                                4
                                <span class="left-corner"></span>
                                <span class="left-corner small"></span>
                            </span>
                                <?php the_field('block2-list4') ?>
                            </li>
                        </ol>   
                    </div> 
                </div>
            </div>  
        </div>


        <div class="section slide2 slide2-hidden-xs" data-anchor="section2">
            <div class="container">
                <h2><?php the_field('heading2') ?></h2>
                <ol>
                    <li class="active">
                    <span class="btn btn-primary">
                        <span class="right-corner"></span>
                        <span class="right-corner small"></span>
                        1
                        <span class="left-corner"></span>
                        <span class="left-corner small"></span>
                    </span>
                        <?php the_field('block2-list1') ?>
                    </li>
                    <li class="notMobile">
                    <a href="#section2-1" class="btn btn-primary">
                        <span class="right-corner"></span>
                        <span class="right-corner small"></span>
                        2
                        <span class="left-corner"></span>
                        <span class="left-corner small"></span>
                    </a>
                    </li>
                    <li class="notMobile">
                    <a href="#section2-2" class="btn btn-primary">
                        <span class="right-corner"></span>
                        <span class="right-corner small"></span>
                        3
                        <span class="left-corner"></span>
                        <span class="left-corner small"></span>
                    </a>
                    </li>
                </ol>
            </div>
        </div>
        <div  class="section absolute slide2 slide2-hidden-xs" data-anchor="section2-1">
            <div class="container">
                <h2><?php the_field('heading2') ?></h2>
                <ol>
                    <li class="active">
                    <span class="btn btn-primary">
                        <span class="right-corner"></span>
                        <span class="right-corner small"></span>
                        2
                        <span class="left-corner"></span>
                        <span class="left-corner small"></span>
                    </span>
                        <?php the_field('block2-list2') ?>
                    </li>
                    <li class="notMobile">
                    <a href="#section2-2" class="btn btn-primary">
                        <span class="right-corner"></span>
                        <span class="right-corner small"></span>
                        3
                        <span class="left-corner"></span>
                        <span class="left-corner small"></span>
                    </a>
                    </li>
                    <li class="notMobile">
                    <a href="#section2-3" class="btn btn-primary">
                        <span class="right-corner"></span>
                        <span class="right-corner small"></span>
                        4
                        <span class="left-corner"></span>
                        <span class="left-corner small"></span>
                    </a>
                    </li>
                </ol>
            </div>
        </div>
        <div  class="section absolute slide2 slide2-hidden-xs" data-anchor="section2-2">
            <div class="container">
                <h2><?php the_field('heading2') ?></h2>
                <ol>
                    <li class="active">
                    <span class="btn btn-primary">
                        <span class="right-corner"></span>
                        <span class="right-corner small"></span>
                        3
                        <span class="left-corner"></span>
                        <span class="left-corner small"></span>
                    </span>
                        <?php the_field('block2-list3') ?>
                    </li>
                    <li class="notMobile">
                    <a href="#section2-3" class="btn btn-primary">
                        <span class="right-corner"></span>
                        <span class="right-corner small"></span>
                        4
                        <span class="left-corner"></span>
                        <span class="left-corner small"></span>
                    </a>
                    </li>
                </ol>
            </div>
        </div>
        <div  class="section absolute slide2 slide2-hidden-xs" data-anchor="section2-3">
            <div class="container">
                <h2><?php the_field('heading2') ?></h2>
                <ol>
                    <li class="active">
                    <span class="btn btn-primary">
                        <span class="right-corner"></span>
                        <span class="right-corner small"></span>
                        4
                        <span class="left-corner"></span>
                        <span class="left-corner small"></span>
                    </span>
                        <?php the_field('block2-list4') ?>
                    </li>
                </ol>
            </div>
        </div>

        <div class="section slide3 slide3-hidden-xs" data-anchor="section3">
            <div class="container">
                <div class="content-wrapper">
                    <h1>Cronion</h1>
                    <h2><?php the_field('heading3') ?></h2>
                    <div class="columns">
                        <?php if( have_rows('goals') ):
                        while ( have_rows('goals') ) : the_row();?>
                        <div class="col3 col-wrap">
                            <div class="image"><img src="<?php the_sub_field('icon'); ?>" width="90" height="90" alt="icon"></div>
                            <?php the_sub_field('goal'); ?>
                        </div>
                        <?php endwhile;
                        endif; ?>
                    </div>   
                </div>  
            </div>
        </div>
        <div class="section slide3 slide3-hidden-lg" data-anchor="section3">
            <div class="container">
               <div class="content-wrapper">
                    <h1>Cronion</h1>
                    <h2><?php the_field('heading3') ?></h2> 
               </div> 
            </div> 
            <div class="container">
                <div class="content-wrapper">
                    
                    <div class="columns">
                        <?php if( have_rows('goals') ):
                        while ( have_rows('goals') ) : the_row();?>
                        <div class="col3 col-wrap slide">
                            <div class="image"><img src="<?php the_sub_field('icon'); ?>" width="90" height="90" alt="icon"></div>
                            <?php the_sub_field('goal'); ?>
                        </div>
                        <?php endwhile;
                        endif; ?>
                    </div> 
                </div>  
            </div>                   
        </div>

        <div class="section slide4 slide3-hidden-xs" data-anchor="section4">
            <div class="container">
                <div class="content-wrapper">
                   <h1>CRONION</h1>
                    <h2><?php the_field('heading4'); ?></h2>
                    <a href="#" class="col5 popup-with-move-anim no-link">
                        <div class="image middle">
                            <span class="right-corner"></span>
                            <span class="right-corner small"></span>
                            <img src="<?php the_field('icon-center'); ?>" width="53" height="57" alt="icon3">
                            <!--<img src="<?php echo get_template_directory_uri(); ?>/images/play.png" width="25" height="27" alt="info" class="info">-->
                            <span class="left-corner"></span>
                            <span class="left-corner small"></span>
                        </div>
                        <!--<div class="text middle"><span class="visible"><?php the_field('text-center'); ?></span></div>-->
                    </a>
                    <div class="columns">
                        <?php if (have_rows('services-left')):
                            $count1 = 1;
                            while (have_rows('services-left')) : the_row(); ?>
                                <a href="#service-<?php echo $count1; ?>" class="col5 popup-with-move-anim">
                                    <div class="image">
                                        <span class="right-corner small"></span>
                                        <img src="<?php the_sub_field('icon'); ?>" width="90" height="90" alt="icon1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/info.png" width="10"
                                             height="30" alt="info" class="info">
                                        <span class="left-corner small"></span>
                                    </div>
                                    <div class="text"><span class="visible"><?php the_sub_field('name'); ?></span><span
                                            class="hidden">Подробнее<br>о услуге</span></div>
                                </a>
                                <?php
                                $count1++;
                            endwhile;
                        endif; ?>
                        

                        <?php if (have_rows('services-right')):
                            $count2 = 10;
                            while (have_rows('services-right')) : the_row(); ?>
                                <a href="#service-<?php echo $count2; ?>" class="col5 popup-with-move-anim">
                                    <div class="image">
                                        <span class="right-corner small"></span>
                                        <img src="<?php the_sub_field('icon'); ?>" width="90" height="90" alt="icon1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/info.png" width="10"
                                             height="30" alt="info" class="info">
                                        <span class="left-corner small"></span>
                                    </div>
                                    <div class="text"><span class="visible"><?php the_sub_field('name'); ?></span><span
                                            class="hidden">Подробнее<br>о услуге</span></div>
                                </a>
                                <?php
                                $count2++;
                            endwhile;
                        endif; ?>

                    </div> 
                </div>
                
            </div>
        </div>

        <div class="section slide4 slide3-hidden-lg" data-anchor="section4">
            <div class="container">
               <div class="content-wrapper">
                    <h1>CRONION</h1>
                    <h2><?php the_field('heading4'); ?></h2> 
               </div> 
            </div> 
            <div class="slide">  
                <div class="container">
                   <div class="content-wrapper">
                        <?php if (have_rows('services-left')):
                            $count1 = 1;
                            while (have_rows('services-left')) : the_row(); ?>
                                <a href="#service-<?php echo $count1; ?>" class="col5 popup-with-move-anim">
                                    <div class="image">
                                        <span class="right-corner small"></span>
                                        <img src="<?php the_sub_field('icon'); ?>" width="90" height="90" alt="icon1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/info.png" width="10"
                                             height="30" alt="info" class="info">
                                        <span class="left-corner small"></span>
                                    </div>
                                    <div class="text"><span class="visible"><?php the_sub_field('name'); ?></span><span
                                            class="hidden">Подробнее<br>о услуге</span></div>
                                </a>
                                <?php
                                $count1++;
                            endwhile;
                        endif; ?>
                        
                   </div> 
                </div>  
            </div>
            <div class="slide">  
                <div class="container">
                   <div class="content-wrapper">
                        <?php if (have_rows('services-right')):
                            $count2 = 10;
                            while (have_rows('services-right')) : the_row(); ?>
                                <a href="#service-<?php echo $count2; ?>" class="col5 popup-with-move-anim">
                                    <div class="image">
                                        <span class="right-corner small"></span>
                                        <img src="<?php the_sub_field('icon'); ?>" width="90" height="90" alt="icon1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/info.png" width="10"
                                             height="30" alt="info" class="info">
                                        <span class="left-corner small"></span>
                                    </div>
                                    <div class="text"><span class="visible"><?php the_sub_field('name'); ?></span><span
                                            class="hidden">Подробнее<br>о услуге</span></div>
                                </a>
                                <?php
                                $count2++;
                            endwhile;
                        endif; ?>
                   </div> 
                </div>  
            </div>   
        </div>

        <div class="section slide5 slide3-hidden-xs" data-anchor="section5">
            <div class="container">
                <div class="content-wrapper">
                    <h1>CRONION</h1>
                    <h2><?php the_field('heading5'); ?></h2>
                    <div class="columns">
                        <?php if (have_rows('principals')):
                            while (have_rows('principals')) : the_row(); ?>
                                <div class="col3">
                                    <div class="image"><img
                                            src="<?php the_sub_field('icon'); ?>"
                                            width="90" height="90" alt="icon1"></div>
                                    <?php the_sub_field('text'); ?>
                                </div>
                            <?php endwhile;
                        endif; ?>
                    </div>   
                </div>  
            </div>
        </div>
        <div class="section slide5 slide3-hidden-lg" data-anchor="section5">
            <div class="container">
                <div class="content-wrapper">
                    <h1>CRONION</h1>
                    <h2><?php the_field('heading5'); ?></h2>
                </div>
            </div>
            <div class="container">
                <div class="content-wrapper">
                   <div class="columns">
                        <?php if (have_rows('principals')):
                            while (have_rows('principals')) : the_row(); ?>
                                <div class="col3 slide">
                                    <div class="image"><img
                                            src="<?php the_sub_field('icon'); ?>"
                                            width="90" height="90" alt="icon1"></div>
                                    <?php the_sub_field('text'); ?>
                                </div>
                            <?php endwhile;
                        endif; ?>
                    </div>  
                </div>
            </div>
        </div>

        <div class="section slide6" data-anchor="section6">
            <div class="container">
                <div class="content-wrapper">
                    <h1>CRONION</h1>
                    <h2><?php the_field('heading6'); ?></h2>
                    <div class="columns">
                        <?php if (have_rows('advantages')):
                            $counter2 = 1;
                            while (have_rows('advantages')) : the_row();
                                if ($counter2 < 3) :?>
                                    <div class="col2">
                                        <div class="columns-inside" data-number="<?php the_sub_field('number') ?>">
                                            <?php the_sub_field('text') ?>
                                        </div>
                                    </div>
                                <?php endif;
                                $counter2++;
                            endwhile;
                        endif; ?>
                    </div>    
                </div>  
            </div>
        </div>

        <div class="section slide6" data-anchor="section6-1">
            <div class="container">
                <div class="content-wrapper">
                    <h1>CRONION</h1>
                    <h2><?php the_field('heading6'); ?></h2>
                    <div class="columns">
                        <?php if (have_rows('advantages')):
                            $counter = 1;
                            while (have_rows('advantages')) : the_row();
                            if ($counter > 2) :?>
                                <div class="col2">
                                    <div class="columns-inside" data-number="<?php the_sub_field('number') ?>">
                                        <?php the_sub_field('text') ?>
                                    </div>
                                </div>
                            <?php endif;
                            $counter++;
                            endwhile;
                        endif; ?>
                    </div>    
                </div>
            </div>
        </div>

        <div class="section slide7 footer" data-anchor="section7">
            <div class="container">
                <div class="content-wrapper">
                    <?php if (is_front_page()) : ?>
                        <a href="#section6" class="scroll bottom"><img src="<?php echo get_template_directory_uri(); ?>/images/scroll.png" width="10" height="80" alt="scroll arrow"><span>Scroll</span></a>
                    <?php endif; ?>

                    <h2><?php the_field('heading7'); ?></h2>
                    <div class="map">
                        <?php if (have_rows('pins')):
                            $i = 1;
                            while (have_rows('pins')) : the_row(); ?>
                                <div class="map-item item<?php echo $i; ?>">
                                    <div class="pulse"></div>
                                    <div class="map-item-icon"></div>
                                    <div class="map-item-text">
                                        <?php the_sub_field('description'); ?>
                                    </div>
                                </div>

                                <?php
                                $i++;
                            endwhile;
                        endif; ?>
                    </div>    
                </div>

                <footer>
                    <nav class="footer-left">
                        <ul>
                            <?php if (get_field('twitter')) : ?>
                            <li><a target="_blank" href="<?php the_field('twitter') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social/twitter.png" width="20" height="18" alt="twitter"></a></li>
                            <?php endif;
                            if (get_field('instagram')) :  ?>
                            <li><a target="_blank" href="<?php the_field('instagram') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.png" width="20" height="20" alt="instagram"></a></li>
                            <?php endif;
                            if (get_field('facebook')) :  ?>
                                <li><a target="_blank" href="<?php the_field('facebook') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.png" width="12" height="18" alt="facebook"></a></li>
                            <?php endif;
                            if (get_field('medium')) :  ?>
                                <li><a target="_blank" href="<?php the_field('medium') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social/medium.png" width="20" height="18" alt="medium"></a></li>
                            <?php endif;
                            if (get_field('telegram')) :  ?>
                                <li><a target="_blank" href="<?php the_field('telegram') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social/telegram.png" width="20" height="20" alt="telegramm"></a></li>
                            <?php endif;?> 
                        </ul>
                    </nav>
                    <nav class="footer-center">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'bottom',
                        )); ?>
                    </nav>
                    <a class="footer-right btn btn-secondary popup-with-move-anim" href="#legal">Легализация криптовалют</a>
                </footer>
            </div>
        </div>

    </main>

<?php get_footer();
