<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a home page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="full-width-page-wrapper">

    <div class="section-1" style="background-image: url(<?php the_field('section-1-hero'); ?>);">

            <div class="hero-text">
                <h1><?php the_field('hero_title_h1'); ?></h1>
                <p><?php the_field('hero_text_home'); ?></p>
            </div>
            <a data-scroll href="<?php the_field('arrow_id_home'); ?>">
                <div id="multiple2">
                <div class="scroll-arrow-container arrow1">
                    <span class="arrow-left"></span>
                    <span class="arrow-right"></span>
                </div>
                <div class="scroll-arrow-container arrow2">
                    <span class="arrow-left"></span>
                    <span class="arrow-right"></span>
                </div>
                <div class="scroll-arrow-container arrow3">
                    <span class="arrow-left"></span>
                    <span class="arrow-right"></span>
                </div>
                </div>
            </a>
    </div>

    <div id="section-2">
        <div class="container-fluid">
            <div class="row center-content">
                <div class="col-md-5">
                    <img src="<?php the_field('section_2_image_home'); ?>" alt="Iris Alexander">
                </div>
                <div class="col-md-7">
                    <h2>
                    <?php if (get_field('section_2_title_home')) : ?>
                        <?php the_field('section_2_title_home'); ?>
                    <?php endif; ?>
                    </h2>
                    <p><?php the_field('section_2_text_home'); ?></p>
                    <a class="explore-button" href="<?php the_field('section_2_explore_home'); ?>">Explore</a>
                </div>
            </div>
        </div>
    </div>
    <div id="anchor-3" class="section-3-wrap">
    <div id="section-3" style="background-image: url(<?php the_field('section_3_background_home'); ?>);">
       <div class="container-fluid">
           <div class="section-3-content">
               <h2><?php the_field('section_3_title_home'); ?></h2>
               <a class="explore-button reveal-button" href="<?php the_field('section_3_explore_link'); ?>">Explore</a>
           </div>
       </div>
      </div>

      <div class="owl-custom hide-custom">
                <?php if (have_rows('hidden_slider')): ?>
              <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="new-collection"><h3>2018 Collection</h3></div>
                    </div>

                  </div>
              </div>

                 <div class="owl-carousel">
                   <?php  while (have_rows('hidden_slider')) : the_row(); ?>

                     <div class="item">
                        <div class="container">
                            <div class="row justify-content-center">
                              <div class="col-md-12"><img src="<?php the_sub_field('slider_image'); ?>" alt=""> </div>
                                <div class="col-md-12">
                                    <div class="owl-content">
                                    <h2><?php the_sub_field('text_title_slider'); ?></h2>
                                    <p><?php the_sub_field('slider_text'); ?></p>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>

                   <?php  endwhile; ?>

                <?php endif; ?>

        </div>
    </div>


    </div>

    <div id="section-4">
        <h3>Media & Events</h3>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <?php echo do_shortcode('[the_grid name="Final Grid"]')  ?>
            </div>
            <div class="col-md-4 article-main">
              <?php
              $args = array( 'post_type' => 'publiched_articles', 'posts_per_page' => 10 );
              $loop = new WP_Query($args);?>
              <i id="post-scroll-up" class="fa fa-chevron-up" aria-hidden="true"></i>
              <div class="article-wrap">
              <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="pub-article">
                  <span><?php echo get_the_date('F j, Y'); ?></span>
                  <h4><?php the_title(); ?></h4>
                  <p><?php the_field('short_intro_article'); ?></p>
                  <a class="explore-button" href="<?php the_field('external_link_to_published_media'); ?>" target="_blank">Read More</a>
                </div>
              <?php endwhile; ?>

              </div>
            <i id="post-scroll" class="fa fa-chevron-down" aria-hidden="true"></i>
            </div>
          </div>

        </div>
    </div>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
