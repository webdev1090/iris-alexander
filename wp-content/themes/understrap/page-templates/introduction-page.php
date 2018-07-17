<?php
/**
 * Template Name: Introduction Page
 *
 *
 *
 * @package understrap
 */

get_header();
get_template_part('global-templates/close-button');
$container = get_theme_mod('understrap_container_type');
?>



<div class="wrapper" id="full-width-page-wrapper">



	<div class="<?php echo esc_attr($container); ?>" id="content">



		<div class="row">



			<div class="col-md-12 content-area" id="primary">



				<main class="site-main" id="intro-page" role="main">



					<div id="intro-1" class="d-flex align-items-end justify-content-center section" style="background-image: url(<?php the_field('hero_background_intro'); ?>)">

                        <div class="intro-1-content"><?php the_field('hero_text_intro'); ?></div>



                        <a data-scroll href="#intro-2">

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



                    <div id="intro-2" class="d-flex align-items-center section" style="background-image: url(<?php the_field('section_2_background_intro'); ?>)">

                    <div class="container">

                        <div class="row">

                        <div class="col-md-6 offset-md-6 intro-2-content">

                            <h3><?php the_field('section_2_title_intro'); ?></h3>

                        <p><?php the_field('section_2_paragraph_intro'); ?></p>

                        </div>

                    </div>

                    </div>

                    </div>



										<div id="intro-3" class="d-flex align-items-end section" style="background-image: url(<?php the_field('section_3_background_intro'); ?>)">

										<div class="container">

												<div class="row">

												<div class="col-md-6 offset-md-6 intro-3-content">

														<p><?php the_field('section_3_text_intro'); ?></p>

												</div>

										</div>

										</div>

										</div>



										<div id="intro-4" class="d-flex align-items-center section">

										<div class="container">

												<div class="row">

													<div class="col-md-5">

															<img src="<?php the_field('section_4_image_left_intro'); ?>" alt="Iris Alexander">

													</div>

													<div class="col-md-6 offset-md-1 intro-4-content d-flex align-items-center">

														<p><?php the_field('section_4_text_intro'); ?></p>

													</div>

										</div>

										</div>

										</div>



										<div id="intro-5" class="d-flex align-items-end section" style="background-image: url(<?php the_field('section_5_background_intro'); ?>)">

										<div class="container">

												<div class="row">

												<div class="col-md-6 offset-md-6 intro-5-content">

														<p><?php the_field('section_5_text_intro'); ?></p>

												</div>

										</div>

										</div>

										</div>



										<div id="intro-6" class="d-flex align-items-center section" style="background-image: url(<?php the_field('section_6_background_intro'); ?>)">

										<div class="container">

												<div class="row">

												<div class="col-md-6 offset-md-6 intro-6-content">

														<p><?php the_field('section_6_text'); ?></p>

												</div>

										</div>

										</div>

										</div>



										<div id="intro-7" class="d-flex align-items-end section" style="background-image: url(<?php the_field('section_7_background_intro'); ?>)">

										<div class="container">

												<div class="row">

												<div class="col-md-6 offset-md-6 intro-7-content">

														<p><?php the_field('section_7_text'); ?></p>

												</div>

										</div>

										</div>

										</div>



										<div id="intro-8" class="d-flex align-items-center section" style="background-image: url(<?php the_field('section_8_background_intro'); ?>)">

										<div class="container">

												<div class="row">

												<div class="col-md-6 offset-md-6 intro-8-content">

														<p><?php the_field('section_8_text_intro'); ?></p>

												</div>

										</div>

										</div>

										</div>



										<div id="intro-9" class="d-flex align-items-end section" style="background-image: url(<?php the_field('section_9_background_intro'); ?>)">

										<div class="container">

												<div class="row">

												<div class="col-md-6 offset-md-6 intro-9-content">

														<p><?php the_field('section_9_text_intro'); ?></p>

												</div>

										</div>

										</div>

										</div>



										<div id="intro-10" class="d-flex align-items-center section" style="background-image: url(<?php the_field('section_10_background_intro'); ?>)">

										<div class="container">

												<div class="row">

												<div class="col-md-6 offset-md-6 intro-10-content">

														<p><?php the_field('section_10_text_intro'); ?></p>

												</div>

										</div>

										</div>

										</div>



										<div id="intro-11" class="d-flex align-items-end section" style="background-image: url(<?php the_field('section_11_background_intro'); ?>)">

										<div class="container">

												<div class="row">

												<div class="col-md-6 offset-md-6 intro-11-content">

														<p><?php the_field('section_11_text_intro'); ?></p>

												</div>

										</div>

										</div>

										</div>



										<div id="intro-12" class="d-flex align-items-center section" style="background-image: url(<?php the_field('section_12_background_intro'); ?>)">

										<div class="container">

												<div class="row">

												<div class="col-md-6 offset-md-6 intro-12-content">

														<p><?php the_field('section_12_text_intro'); ?></p>

												</div>

										</div>

										</div>

										</div>



										<div id="intro-13" class="d-flex align-items-end section" style="background-image: url(<?php the_field('section_13_background_intro'); ?>)">

										<div class="container">

												<div class="row">

												<div class="col-md-6 offset-md-6 intro-13-content">

														<p><?php the_field('section_13_text_intro'); ?></p>

												</div>

										</div>

										</div>

										</div>



				</main><!-- #main -->



			</div><!-- #primary -->



		</div><!-- .row end -->



	</div><!-- Container end -->



</div><!-- Wrapper end -->



<?php get_footer(); ?>

