<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package spx-dev
 */

get_header(); ?>

<section class="hero">
  <div class="hero-body">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="title text-white text-center"><?php the_title(); ?></h1>
          <p class="subtitle text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry?s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
      </div>
    </div><!--/.container-->
  </div><!--/.hero-body-->
</section><!--/.hero-->

<section class="page-body">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
  </div><!--/.container-->
</section><!--/.page-body-->


<?php
get_sidebar();
get_footer();
